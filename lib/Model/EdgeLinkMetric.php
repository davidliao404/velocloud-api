<?php
/**
 * EdgeLinkMetric
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Velocloud API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.0.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * EdgeLinkMetric Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EdgeLinkMetric
{
    /**
     * Possible values of this enum
     */
    const BYTES_RX = 'bytesRx';
    const BYTES_TX = 'bytesTx';
    const TOTAL_BYTES = 'totalBytes';
    const P1_BYTES_RX = 'p1BytesRx';
    const P1_BYTES_TX = 'p1BytesTx';
    const P1_PACKETS_RX = 'p1PacketsRx';
    const P1_PACKETS_TX = 'p1PacketsTx';
    const P2_BYTES_RX = 'p2BytesRx';
    const P2_BYTES_TX = 'p2BytesTx';
    const P2_PACKETS_RX = 'p2PacketsRx';
    const P2_PACKETS_TX = 'p2PacketsTx';
    const P3_BYTES_RX = 'p3BytesRx';
    const P3_BYTES_TX = 'p3BytesTx';
    const P3_PACKETS_RX = 'p3PacketsRx';
    const P3_PACKETS_TX = 'p3PacketsTx';
    const CONTROL_BYTES_RX = 'controlBytesRx';
    const CONTROL_BYTES_TX = 'controlBytesTx';
    const CONTROL_PACKETS_RX = 'controlPacketsRx';
    const CONTROL_PACKETS_TX = 'controlPacketsTx';
    const BEST_BW_KBPS_RX = 'bestBwKbpsRx';
    const BEST_BW_KBPS_TX = 'bestBwKbpsTx';
    const BEST_JITTER_MS_RX = 'bestJitterMsRx';
    const BEST_JITTER_MS_TX = 'bestJitterMsTx';
    const BEST_LATENCY_MS_RX = 'bestLatencyMsRx';
    const BEST_LATENCY_MS_TX = 'bestLatencyMsTx';
    const BEST_LOSS_PCT_RX = 'bestLossPctRx';
    const BEST_LOSS_PCT_TX = 'bestLossPctTx';
    const BPS_OF_BEST_PATH_RX = 'bpsOfBestPathRx';
    const BPS_OF_BEST_PATH_TX = 'bpsOfBestPathTx';
    const SIGNAL_STRENGTH = 'signalStrength';
    const SCORE_TX = 'scoreTx';
    const SCORE_RX = 'scoreRx';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BYTES_RX,
            self::BYTES_TX,
            self::TOTAL_BYTES,
            self::P1_BYTES_RX,
            self::P1_BYTES_TX,
            self::P1_PACKETS_RX,
            self::P1_PACKETS_TX,
            self::P2_BYTES_RX,
            self::P2_BYTES_TX,
            self::P2_PACKETS_RX,
            self::P2_PACKETS_TX,
            self::P3_BYTES_RX,
            self::P3_BYTES_TX,
            self::P3_PACKETS_RX,
            self::P3_PACKETS_TX,
            self::CONTROL_BYTES_RX,
            self::CONTROL_BYTES_TX,
            self::CONTROL_PACKETS_RX,
            self::CONTROL_PACKETS_TX,
            self::BEST_BW_KBPS_RX,
            self::BEST_BW_KBPS_TX,
            self::BEST_JITTER_MS_RX,
            self::BEST_JITTER_MS_TX,
            self::BEST_LATENCY_MS_RX,
            self::BEST_LATENCY_MS_TX,
            self::BEST_LOSS_PCT_RX,
            self::BEST_LOSS_PCT_TX,
            self::BPS_OF_BEST_PATH_RX,
            self::BPS_OF_BEST_PATH_TX,
            self::SIGNAL_STRENGTH,
            self::SCORE_TX,
            self::SCORE_RX,
        ];
    }
}


