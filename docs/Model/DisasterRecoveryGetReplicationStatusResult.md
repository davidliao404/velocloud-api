# DisasterRecoveryGetReplicationStatusResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active_address** | **string** |  | 
**active_replication_address** | **string** |  | [optional] 
**client_contact** | [**\Swagger\Client\Model\DisasterRecoveryClientContact[]**](DisasterRecoveryClientContact.md) |  | [optional] 
**client_count** | [**\Swagger\Client\Model\DisasterRecoveryGetReplicationStatusResultClientCount**](DisasterRecoveryGetReplicationStatusResultClientCount.md) |  | [optional] 
**dr_state** | **string** |  | 
**dr_vco_user** | **string** |  | 
**failure_description** | **string** |  | 
**last_dr_protected_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**role** | **string** |  | 
**role_timestamp** | [**\DateTime**](\DateTime.md) |  | 
**standby_list** | [**\Swagger\Client\Model\DisasterRecoveryGetReplicationStatusResultStandbyList[]**](DisasterRecoveryGetReplicationStatusResultStandbyList.md) |  | 
**state_history** | [**\Swagger\Client\Model\DisasterRecoveryGetReplicationStatusResultStateHistory[]**](DisasterRecoveryGetReplicationStatusResultStateHistory.md) |  | [optional] 
**state_timestamp** | [**\DateTime**](\DateTime.md) |  | [optional] 
**vco_ip** | **string** |  | 
**vco_replication_ip** | **string** |  | [optional] 
**vco_uuid** | **string** |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


