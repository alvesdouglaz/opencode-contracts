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
     * Gate class
     * A controll class to access permissions
     *
     * @package     Opencode/Contracts
     * @author      Douglas Alves <https://github.com/alvesdouglaz/>
     * @since       1.0.0
     */
    interface Gate extends ACL
    {
        /**
         * Register a callback to run before all Gate checks.
         *
         * @param  callable  $callback
         * @return $this
         */
        public function before(callable $callback) : Gate;

        /**
         * Register a callback to run after all Gate checks.
         *
         * @param  callable  $callback
         * @return $this
         */
        public function after(callable $callback) : Gate;

        public function forUser($user);
    }
}
