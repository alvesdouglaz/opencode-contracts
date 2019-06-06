<?php
/**
 * The Opencode Contracts package
 *
 * @package     Opencode/Contracts
 * @copyright   2019 (c) Douglas Alves
 * @author      Douglas Alves <https://github.com/alvesdouglaz/>
 * @link        https://github.com/alvesdouglaz/opencode-contracts
 * @license     https://github.com/alvesdouglaz/opencode-contracts/blob/master/LICENSE Apache-2.0
 * @version     1.0.0
 */

namespace Opencode\Contracts\Auth\Access
{

    /**
     * Access Controll List (ACL) class
     *
     * @package     Opencode/Contracts
     * @author      Douglas Alves <https://github.com/alvesdouglaz/>
     * @since       1.0.0
     */
    interface Acl
    {

        #region <<< Roles >>>

        public function role($name, $parent, $callback = null) : Acl;
        public function getRoles() : array;

        /**
         * Determine if a given role has been defined.
         *
         * @param  string  $role
         * @return bool
         */
        public function hasRole(string $role) : bool;

        #endregion

        #region <<< Resources >>>

        /**
         * Define abilities for a resource.
         *
         * @param  string  $name
         * @param  string  $class
         * @param  array|null  $capabilities
         * @return $this
         */
        public function resource($name, $class, array $capabilities = null) : Acl;

        public function getResources() : array;

        /**
         * Determine if a given resource has been defined.
         *
         * @param  string  $resource
         * @return bool
         */
        public function hasResource(string $resourse) : bool;

        #endregion

        #region <<< Capability >>>

        /**
         * Define a new capability.
         *
         * @param  string  $capability
         * @param  callable|string  $callback
         * @return $this
         */
        public function capability(string $capability, $callback) : Acl;
        public function getCapabilities() : array;

        /**
         * Determine if a given capability has been defined.
         *
         * @param  string  $capability
         * @return bool
         */
        public function hasCapability(string $capability) : bool;

        #endregion

    }
}