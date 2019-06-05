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

namespace Opencode\Contracts\Auth\JWT
{
    /**
     * JSON Web Token (JWT)
     *
     * @package     Opencode/Contracts
     * @author      Douglas Alves <https://github.com/alvesdouglaz/>
     * @since       1.0.0
     */
    interface JWT
    {
        /**
         * Receive the information, encoded and return the JWT token
         *
         * @param array $payload
         * @param string $key
         * @param string $alg
         * @param null $head
         * @return string
         */
        public function encode(array $payload, string $key = null, string $alg = 'HS256', $head = null) : string;

        /**
         * Receive a token and decode this
         *
         * @param string $token
         * @return void
         */
        public function decode(string $token) : void;

        /**
         * Get the header values
         *
         * @return array
         */
        public function getHeader() : array ;

        /**
         * Set the header values
         *
         * @param array $header
         * @return void
         */
        public function setHeader(array $header) : void;

        /**
         * Return the payload values
         *
         * @return array
         */
        public function getPayload() : array;

        /**
         * Set the payloads values
         *
         * @param array $payload
         * @return void
         */
        public function setPayload(array $payload) : void;

        /**
         * Build the JWT signature
         *
         * @return string
         */
        public function signature() : string;

        /**
         * Validate a token informations
         *
         * @param string $jwt
         * @param string $key
         * @return bool
         */
        public function validate(string $jwt, string $key) : bool;

        /**
         * Turn an array into base64 json string
         *
         * @return string
         */
        function tokenizer() : string;
    }
}
