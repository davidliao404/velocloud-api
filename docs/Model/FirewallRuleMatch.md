# FirewallRuleMatch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**appid** | **int** | Integer ID corresponding to an application in the network-level application map | [optional] 
**classid** | **int** | Integer ID corresponding to an application class in the network-level application map | [optional] 
**dscp** | **int** | Integer ID indicating DSCP classification | [optional] 
**sip** | **string** | Source IP address | [optional] 
**sport_high** | **int** | Upper bound of a source port range | [optional] 
**sport_low** | **int** | Lower bound of a source port range | [optional] 
**ssm** | **string** | Source subnet mask, e.g. 255.255.255.0 | [optional] 
**smac** | **string** | Source MAC address | [optional] 
**svlan** | **int** | Integer ID for the source VLAN | [optional] 
**os_version** | **int** |  | [optional] 
**hostname** | **string** |  | [optional] 
**dip** | **string** | Destination IP address | [optional] 
**dport_low** | **int** | Lower bound of a destination port range | [optional] 
**dport_high** | **int** | Upper bound of a destination port range | [optional] 
**dsm** | **string** | Destination subnet mask e.g. 255.255.255.0 | [optional] 
**dmac** | **string** | Destination MAC address | [optional] 
**dvlan** | **int** | Integer ID for the destination VLAN | [optional] 
**proto** | **int** | Integer ID corresponding to a protocol | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


