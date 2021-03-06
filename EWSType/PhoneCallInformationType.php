<?php
/**
 * Contains EWSType_PhoneCallInformationType.
 */

/**
 * Represents the state information for a phone call.
 *
 * @package php-ews\Types
 */
class EWSType_PhoneCallInformationType extends EWSType
{
    /**
     * Specifies the cause of a connection failure.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ConnectionFailureCauseType
     */
    public $ConnectionFailureCause;

    /**
     * Specifies the state for a phone call.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var EWSType_PhoneCallStateType
     */
    public $PhoneCallState;

    /**
     * Specifies the SIP response code.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $SIPResponseCode;

    /**
     * Specifies the SIP response text.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $SIPResponseText;
}
