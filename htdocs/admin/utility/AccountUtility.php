<?php
include_once "admin/config/SessionConfig.php";
include_once "common/gateway/UserGateway.php";
include_once "common/utility/DB.php";

/**
 * Utility class for managing user accounts
 */
class AccountUtility
{
    private static ?User $currentUser; // Current user is cached to avoid unnecessary repeated database queries

    /**
     * Gets the user who is currently logged in. If no user is logged in, null is returned.
     * @return User|null The user or null, depending on the login status
     */
    public static function getCurrentUser(): ?User
    {
        if (isset(self::$currentUser)) {
            return self::$currentUser;
        }

        if (isset($_SESSION[SessionConfig::CURRENT_USER_ID])) {
            try {
                $user = UserGateway::fetch(["id" => $_SESSION[SessionConfig::CURRENT_USER_ID]]);
                self::$currentUser = $user;
                return $user;
            } catch (InvalidArgumentException $e) {
                return null;
            }
        } else {
            return null;
        }
    }

    /**
     * Checks whether a user is currently logged in.
     * @return bool True if a user is logged in, false otherwise
     */
    public static function isLoggedIn(): bool
    {
        return (self::getCurrentUser() != null);
    }

    /**
     * Logs in the user with the given username and password.
     * @param string $username The user's username
     * @param string $password The user's (unhashed) password input
     * @return User|null The user if login was successful, false otherwise
     */
    public static function login(string $username, string $password): ?User
    {
        $result = UserGateway::fetch(["username" => $username]);

        if (!$result) {
            return null;
        }

        if (password_verify($password, $result->password)) {
            $_SESSION[SessionConfig::CURRENT_USER_ID] = $result->getID();
            return UserGateway::fetch(["id" => $result->getID()]);
        } else {
            return null;
        }
    }

    /**
     * Registers a user account using the data in the given user object.
     * The ID field of the user object is ignored when the entry is created since a free one will be assigned automatically.
     * @param User $user The user data to register an account with
     * @return User|null The newly registered user, or null if the registration failed
     */
    public static function register(User $user): ?User
    {
        $user->password = self::hash($user->password);

        try {
            $user->create();
            return $user;
        } catch (PDOException $e) {
            return null;
        }
    }

    /**
     * Logs out the current user.
     */
    public static function logout()
    {
        unset($_SESSION[SessionConfig::CURRENT_USER_ID]);
        self::$currentUser = null;
    }

    /**
     * Generates a hash for the given input using the PASSWORD_BCRYPT algorithm
     * @param string $input The string to hash
     * @return string The hash value
     */
    public static function hash(string $input): string
    {
        return password_hash($input, PASSWORD_BCRYPT);
    }
}
