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
    interface ResourceAcl
    {
        /**
         * ResourceAcl constructor.
         *
         * @param string|null $name
         * @param string|null $owner
         */
        public function __construct(string $name = null, string $owner = null);

        /**
         * @return string
         */
        public function getName() : string;

        /**
         * @param string $name
         * @return ResourceAcl
         */
        public function setName(string $name) : ResourceAcl;

        /**
         * @return string
         */
        public function getOwner() : string;

        /**
         * @param string $owner
         * @return ResourceAcl
         */
        public function setOwner(string $owner) : ResourceAcl;
    }

}