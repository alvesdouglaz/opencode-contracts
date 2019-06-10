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
     * Entity ACL Contract
     *
     * @package     Opencode/Contracts
     * @author      Douglas Alves <https://github.com/alvesdouglaz/>
     * @since       1.0.0
     */
    interface RoleAcl
    {
        /**
         * RoleAcl constructor.
         *
         * @param string|null $name
         * @return RoleAcl
         */
        public function __construct(string $name = null);

        /**
         * Add capabilities
         *
         * @param array $capabilities
         * @return RoleAcl
         */
        public function addCapabilities(array $capabilities) : RoleAcl;

        /**
         * Return all capabilities
         *
         * @return array
         */
        public function capabilities() : array;
    }
}