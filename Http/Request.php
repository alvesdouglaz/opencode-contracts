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

namespace Opencode\Contracts\Http
{
    /**
     * Request
     *
     * @package     Opencode/Http
     * @author      Douglas Alves <https://github.com/alvesdouglaz/>
     * @since       1.0.0
     */
    interface Request
    {
        /**
         * Singleton instance.
         *
         * @return $this
         */
        public static function instance();

        /**
         * Get user IP.
         *
         * @return string
         */
        public function ip() : string;

        /**
         * Get agent user browser.
         *
         * @return string
         */
        public function browser() : string;

        /**
         * Get user platform.
         *
         * @return string
         */
        public function platform() : string;

        /**
         * Check whether user has connected from a mobile device (tablet, etc).
         *
         * @return bool
         */
        public function isMobile() : bool;
    }
}
