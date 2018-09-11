# Swagger\Client\AllApi

All URIs are relative to *https://localhost/portal/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurationCloneAndConvertConfiguration**](AllApi.md#configurationCloneAndConvertConfiguration) | **POST** /configuration/cloneAndConvertConfiguration | Clone and convert a network based profile configuration to segment based profile configuration
[**configurationCloneConfiguration**](AllApi.md#configurationCloneConfiguration) | **POST** /configuration/cloneConfiguration | Clone a configuration profile
[**configurationCloneEnterpriseTemplate**](AllApi.md#configurationCloneEnterpriseTemplate) | **POST** /configuration/cloneEnterpriseTemplate | Clone the default enterprise configuration profile
[**configurationDeleteConfiguration**](AllApi.md#configurationDeleteConfiguration) | **POST** /configuration/deleteConfiguration | Delete a configuration profile
[**configurationGetConfiguration**](AllApi.md#configurationGetConfiguration) | **POST** /configuration/getConfiguration | Get a configuration profile
[**configurationGetConfigurationModules**](AllApi.md#configurationGetConfigurationModules) | **POST** /configuration/getConfigurationModules | List the modules that compose a configuration profile
[**configurationGetRoutableApplications**](AllApi.md#configurationGetRoutableApplications) | **POST** /configuration/getRoutableApplications | List applications that are first packet routable
[**configurationInsertConfigurationModule**](AllApi.md#configurationInsertConfigurationModule) | **POST** /configuration/insertConfigurationModule | Insert a new configuration module
[**configurationUpdateConfigurationModule**](AllApi.md#configurationUpdateConfigurationModule) | **POST** /configuration/updateConfigurationModule | Update a configuration module
[**disasterRecoveryConfigureActiveForReplication**](AllApi.md#disasterRecoveryConfigureActiveForReplication) | **POST** /disasterRecovery/configureActiveForReplication | Designate a standby Orchestrator for disaster recovery replication
[**disasterRecoveryDemoteActive**](AllApi.md#disasterRecoveryDemoteActive) | **POST** /disasterRecovery/demoteActive | Demote current server from active to zombie
[**disasterRecoveryGetReplicationBlob**](AllApi.md#disasterRecoveryGetReplicationBlob) | **POST** /disasterRecovery/getReplicationBlob | Get the blob needed to configure replication on the standby
[**disasterRecoveryGetReplicationStatus**](AllApi.md#disasterRecoveryGetReplicationStatus) | **POST** /disasterRecovery/getReplicationStatus | Get disaster recovery status
[**disasterRecoveryPrepareForStandby**](AllApi.md#disasterRecoveryPrepareForStandby) | **POST** /disasterRecovery/prepareForStandby | Prepare current Orchestrator to be configured as a standby system
[**disasterRecoveryPromoteStandbyToActive**](AllApi.md#disasterRecoveryPromoteStandbyToActive) | **POST** /disasterRecovery/promoteStandbyToActive | Promote the current server to take over as the single standalone VCO
[**disasterRecoveryRemoveStandby**](AllApi.md#disasterRecoveryRemoveStandby) | **POST** /disasterRecovery/removeStandby | Unconfigure disaster recovery on the current server
[**disasterRecoveryTransitionToStandby**](AllApi.md#disasterRecoveryTransitionToStandby) | **POST** /disasterRecovery/transitionToStandby | Configure current Orchestrator to transition to standby in disaster recovery active/standby pair.
[**edgeDeleteEdge**](AllApi.md#edgeDeleteEdge) | **POST** /edge/deleteEdge | Delete an edge
[**edgeDeleteEdgeBgpNeighborRecords**](AllApi.md#edgeDeleteEdgeBgpNeighborRecords) | **POST** /edge/deleteEdgeBgpNeighborRecords | Delete edge BGP neighbor records
[**edgeEdgeCancelReactivation**](AllApi.md#edgeEdgeCancelReactivation) | **POST** /edge/edgeCancelReactivation | Cancel a pending edge reactivation request
[**edgeEdgeProvision**](AllApi.md#edgeEdgeProvision) | **POST** /edge/edgeProvision | Provision an edge
[**edgeEdgeRequestReactivation**](AllApi.md#edgeEdgeRequestReactivation) | **POST** /edge/edgeRequestReactivation | Reactivate an edge
[**edgeGetClientVisibilityMode**](AllApi.md#edgeGetClientVisibilityMode) | **POST** /edge/getClientVisibilityMode | Get an edge&#39;s client visibility mode
[**edgeGetEdge**](AllApi.md#edgeGetEdge) | **POST** /edge/getEdge | Get edge
[**edgeGetEdgeConfigurationStack**](AllApi.md#edgeGetEdgeConfigurationStack) | **POST** /edge/getEdgeConfigurationStack | Get an edge&#39;s configuration stack
[**edgeSetEdgeEnterpriseConfiguration**](AllApi.md#edgeSetEdgeEnterpriseConfiguration) | **POST** /edge/setEdgeEnterpriseConfiguration | Apply an enterprise configuration to an Edge
[**edgeSetEdgeHandOffGateways**](AllApi.md#edgeSetEdgeHandOffGateways) | **POST** /edge/setEdgeHandOffGateways | Set an edge&#39;s on-premise hand off gateways
[**edgeSetEdgeOperatorConfiguration**](AllApi.md#edgeSetEdgeOperatorConfiguration) | **POST** /edge/setEdgeOperatorConfiguration | Apply an operator configuration to an Edge
[**edgeUpdateEdgeAdminPassword**](AllApi.md#edgeUpdateEdgeAdminPassword) | **POST** /edge/updateEdgeAdminPassword | Update edge&#39;s local UI authentication credentials
[**edgeUpdateEdgeAttributes**](AllApi.md#edgeUpdateEdgeAttributes) | **POST** /edge/updateEdgeAttributes | Update edge attributes
[**edgeUpdateEdgeCredentialsByConfiguration**](AllApi.md#edgeUpdateEdgeCredentialsByConfiguration) | **POST** /edge/updateEdgeCredentialsByConfiguration | Update edge UI credentials by configuration id
[**enterpriseDeleteEnterprise**](AllApi.md#enterpriseDeleteEnterprise) | **POST** /enterprise/deleteEnterprise | Delete an enterprise
[**enterpriseDeleteEnterpriseGatewayRecords**](AllApi.md#enterpriseDeleteEnterpriseGatewayRecords) | **POST** /enterprise/deleteEnterpriseGatewayRecords | Delete enterprise gateway record(s)
[**enterpriseDeleteEnterpriseNetworkAllocation**](AllApi.md#enterpriseDeleteEnterpriseNetworkAllocation) | **POST** /enterprise/deleteEnterpriseNetworkAllocation | Delete an enterprise network allocation
[**enterpriseDeleteEnterpriseService**](AllApi.md#enterpriseDeleteEnterpriseService) | **POST** /enterprise/deleteEnterpriseService | Delete an enterprise service
[**enterpriseGetEnterprise**](AllApi.md#enterpriseGetEnterprise) | **POST** /enterprise/getEnterprise | Get enterprise
[**enterpriseGetEnterpriseAddresses**](AllApi.md#enterpriseGetEnterpriseAddresses) | **POST** /enterprise/getEnterpriseAddresses | Get enterprise IP address information
[**enterpriseGetEnterpriseAlertConfigurations**](AllApi.md#enterpriseGetEnterpriseAlertConfigurations) | **POST** /enterprise/getEnterpriseAlertConfigurations | Get the enterprise alert configuration
[**enterpriseGetEnterpriseAlerts**](AllApi.md#enterpriseGetEnterpriseAlerts) | **POST** /enterprise/getEnterpriseAlerts | Get a list of the alerts triggered for the enterprise
[**enterpriseGetEnterpriseAllAlertRecipients**](AllApi.md#enterpriseGetEnterpriseAllAlertRecipients) | **POST** /enterprise/getEnterpriseAllAlertsRecipients | List recipients currently receiving ALL enterprise alerts
[**enterpriseGetEnterpriseCapabilities**](AllApi.md#enterpriseGetEnterpriseCapabilities) | **POST** /enterprise/getEnterpriseCapabilities | Get enterprise capabilities
[**enterpriseGetEnterpriseConfigurations**](AllApi.md#enterpriseGetEnterpriseConfigurations) | **POST** /enterprise/getEnterpriseConfigurations | Get enterprise configuration profiles
[**enterpriseGetEnterpriseEdges**](AllApi.md#enterpriseGetEnterpriseEdges) | **POST** /enterprise/getEnterpriseEdges | Get edges associated with an enterprise
[**enterpriseGetEnterpriseGatewayHandoff**](AllApi.md#enterpriseGetEnterpriseGatewayHandoff) | **POST** /enterprise/getEnterpriseGatewayHandoff | Get enterprise gateway handoff configuration
[**enterpriseGetEnterpriseNetworkAllocation**](AllApi.md#enterpriseGetEnterpriseNetworkAllocation) | **POST** /enterprise/getEnterpriseNetworkAllocation | Get an enterprise network allocation
[**enterpriseGetEnterpriseNetworkAllocations**](AllApi.md#enterpriseGetEnterpriseNetworkAllocations) | **POST** /enterprise/getEnterpriseNetworkAllocations | Get all network allocation objects defined on an enterprise
[**enterpriseGetEnterpriseProperty**](AllApi.md#enterpriseGetEnterpriseProperty) | **POST** /enterprise/getEnterpriseProperty | Get enterprise property
[**enterpriseGetEnterpriseRouteConfiguration**](AllApi.md#enterpriseGetEnterpriseRouteConfiguration) | **POST** /enterprise/getEnterpriseRouteConfiguration | Get route advertisement and routing preferences policy
[**enterpriseGetEnterpriseRouteTable**](AllApi.md#enterpriseGetEnterpriseRouteTable) | **POST** /enterprise/getEnterpriseRouteTable | Get the enterprise route table
[**enterpriseGetEnterpriseServices**](AllApi.md#enterpriseGetEnterpriseServices) | **POST** /enterprise/getEnterpriseServices | Get enterprise network service detail
[**enterpriseGetEnterpriseUsers**](AllApi.md#enterpriseGetEnterpriseUsers) | **POST** /enterprise/getEnterpriseUsers | Get list of enterprise users by enterprise id
[**enterpriseInsertEnterprise**](AllApi.md#enterpriseInsertEnterprise) | **POST** /enterprise/insertEnterprise | Insert a new enterprise
[**enterpriseInsertEnterpriseNetworkAllocation**](AllApi.md#enterpriseInsertEnterpriseNetworkAllocation) | **POST** /enterprise/insertEnterpriseNetworkAllocation | Insert an enterprise network allocation
[**enterpriseInsertEnterpriseNetworkSegment**](AllApi.md#enterpriseInsertEnterpriseNetworkSegment) | **POST** /enterprise/insertEnterpriseNetworkSegment | Insert an enterprise network segment
[**enterpriseInsertEnterpriseService**](AllApi.md#enterpriseInsertEnterpriseService) | **POST** /enterprise/insertEnterpriseService | Insert a new enterprise service
[**enterpriseInsertEnterpriseUser**](AllApi.md#enterpriseInsertEnterpriseUser) | **POST** /enterprise/insertEnterpriseUser | Insert an enterprise user
[**enterpriseInsertOrUpdateEnterpriseAlertConfigurations**](AllApi.md#enterpriseInsertOrUpdateEnterpriseAlertConfigurations) | **POST** /enterprise/insertOrUpdateEnterpriseAlertConfigurations | Insert, update, or delete enterprise alert configurations
[**enterpriseInsertOrUpdateEnterpriseCapability**](AllApi.md#enterpriseInsertOrUpdateEnterpriseCapability) | **POST** /enterprise/insertOrUpdateEnterpriseCapability | Insert or update an enterprise capability
[**enterpriseInsertOrUpdateEnterpriseGatewayHandoff**](AllApi.md#enterpriseInsertOrUpdateEnterpriseGatewayHandoff) | **POST** /enterprise/insertOrUpdateEnterpriseGatewayHandoff | Insert or update an enterprise gateway handoff configuration
[**enterpriseInsertOrUpdateEnterpriseProperty**](AllApi.md#enterpriseInsertOrUpdateEnterpriseProperty) | **POST** /enterprise/insertOrUpdateEnterpriseProperty | Insert or update an enterprise property
[**enterpriseProxyDeleteEnterpriseProxyUser**](AllApi.md#enterpriseProxyDeleteEnterpriseProxyUser) | **POST** /enterpriseProxy/deleteEnterpriseProxyUser | Delete an enterprise proxy admin user
[**enterpriseProxyGetEnterpriseProxyEdgeInventory**](AllApi.md#enterpriseProxyGetEnterpriseProxyEdgeInventory) | **POST** /enterpriseProxy/getEnterpriseProxyEdgeInventory | Get a list of all partner enterprises and edge inventory associated with each enterprise
[**enterpriseProxyGetEnterpriseProxyEnterprises**](AllApi.md#enterpriseProxyGetEnterpriseProxyEnterprises) | **POST** /enterpriseProxy/getEnterpriseProxyEnterprises | Get a list of all partner enterprises
[**enterpriseProxyGetEnterpriseProxyGatewayPools**](AllApi.md#enterpriseProxyGetEnterpriseProxyGatewayPools) | **POST** /enterpriseProxy/getEnterpriseProxyGatewayPools | Get list of gateway pools
[**enterpriseProxyGetEnterpriseProxyOperatorProfiles**](AllApi.md#enterpriseProxyGetEnterpriseProxyOperatorProfiles) | **POST** /enterpriseProxy/getEnterpriseProxyOperatorProfiles | Get the operator profiles associated with a partner
[**enterpriseProxyGetEnterpriseProxyUser**](AllApi.md#enterpriseProxyGetEnterpriseProxyUser) | **POST** /enterpriseProxy/getEnterpriseProxyUser | Get an enterprise proxy user
[**enterpriseProxyGetEnterpriseProxyUsers**](AllApi.md#enterpriseProxyGetEnterpriseProxyUsers) | **POST** /enterpriseProxy/getEnterpriseProxyUsers | Get all enterprise proxy admin users
[**enterpriseProxyInsertEnterpriseProxyEnterprise**](AllApi.md#enterpriseProxyInsertEnterpriseProxyEnterprise) | **POST** /enterpriseProxy/insertEnterpriseProxyEnterprise | Insert a new enterprise owned by an MSP
[**enterpriseProxyInsertEnterpriseProxyUser**](AllApi.md#enterpriseProxyInsertEnterpriseProxyUser) | **POST** /enterpriseProxy/insertEnterpriseProxyUser | Create a new partner admin user
[**enterpriseProxyUpdateEnterpriseProxyUser**](AllApi.md#enterpriseProxyUpdateEnterpriseProxyUser) | **POST** /enterpriseProxy/updateEnterpriseProxyUser | Update an enterprise proxy admin user
[**enterpriseSetEnterpriseAllAlertRecipients**](AllApi.md#enterpriseSetEnterpriseAllAlertRecipients) | **POST** /enterprise/setEnterpriseAllAlertsRecipients | Set the recipients who should receive all alerts for an enterprise
[**enterpriseUpdateEnterprise**](AllApi.md#enterpriseUpdateEnterprise) | **POST** /enterprise/updateEnterprise | Update an enterprise
[**enterpriseUpdateEnterpriseNetworkAllocation**](AllApi.md#enterpriseUpdateEnterpriseNetworkAllocation) | **POST** /enterprise/updateEnterpriseNetworkAllocation | Update an enterprise network allocation
[**enterpriseUpdateEnterpriseRoute**](AllApi.md#enterpriseUpdateEnterpriseRoute) | **POST** /enterprise/updateEnterpriseRoute | Update an enterprise route
[**enterpriseUpdateEnterpriseRouteConfiguration**](AllApi.md#enterpriseUpdateEnterpriseRouteConfiguration) | **POST** /enterprise/updateEnterpriseRouteConfiguration | Update enterprise routing configuration
[**enterpriseUpdateEnterpriseSecurityPolicy**](AllApi.md#enterpriseUpdateEnterpriseSecurityPolicy) | **POST** /enterprise/updateEnterpriseSecurityPolicy | Update enterprise security policy
[**enterpriseUpdateEnterpriseService**](AllApi.md#enterpriseUpdateEnterpriseService) | **POST** /enterprise/updateEnterpriseService | Update an enterprise service
[**enterpriseUserDeleteEnterpriseUser**](AllApi.md#enterpriseUserDeleteEnterpriseUser) | **POST** /enterpriseUser/deleteEnterpriseUser | Delete an enterprise user.
[**enterpriseUserGetEnterpriseUser**](AllApi.md#enterpriseUserGetEnterpriseUser) | **POST** /enterpriseUser/getEnterpriseUser | Get an enterprise user
[**enterpriseUserUpdateEnterpriseUser**](AllApi.md#enterpriseUserUpdateEnterpriseUser) | **POST** /enterpriseUser/updateEnterpriseUser | Update an enterprise user
[**eventGetEnterpriseEvents**](AllApi.md#eventGetEnterpriseEvents) | **POST** /event/getEnterpriseEvents | Fetch edge events
[**eventGetOperatorEvents**](AllApi.md#eventGetOperatorEvents) | **POST** /event/getOperatorEvents | Fetch operator events
[**firewallGetEnterpriseFirewallLogs**](AllApi.md#firewallGetEnterpriseFirewallLogs) | **POST** /firewall/getEnterpriseFirewallLogs | Get enterprise firewall logs
[**gatewayDeleteGateway**](AllApi.md#gatewayDeleteGateway) | **POST** /gateway/deleteGateway | Delete a gateway
[**gatewayGatewayProvision**](AllApi.md#gatewayGatewayProvision) | **POST** /gateway/gatewayProvision | Provision a gateway
[**gatewayUpdateGatewayAttributes**](AllApi.md#gatewayUpdateGatewayAttributes) | **POST** /gateway/updateGatewayAttributes | Update gateway attributes
[**linkQualityEventGetLinkQualityEvents**](AllApi.md#linkQualityEventGetLinkQualityEvents) | **POST** /linkQualityEvent/getLinkQualityEvents | Get link quality data
[**loginEnterpriseLogin**](AllApi.md#loginEnterpriseLogin) | **POST** /login/enterpriseLogin | Authentication for non-operator users
[**loginOperatorLogin**](AllApi.md#loginOperatorLogin) | **POST** /login/operatorLogin | Authentication for an operator user
[**logout**](AllApi.md#logout) | **POST** /logout | Deactivate a given authorization cookie
[**meta**](AllApi.md#meta) | **POST** /meta/{apiPath} | Get meta-data on any other API call
[**metricsGetEdgeAppLinkMetrics**](AllApi.md#metricsGetEdgeAppLinkMetrics) | **POST** /metrics/getEdgeAppLinkMetrics | Get flow metric aggregate data by link
[**metricsGetEdgeAppLinkSeries**](AllApi.md#metricsGetEdgeAppLinkSeries) | **POST** /metrics/getEdgeAppLinkSeries | Get flow metric time series data by link
[**metricsGetEdgeAppMetrics**](AllApi.md#metricsGetEdgeAppMetrics) | **POST** /metrics/getEdgeAppMetrics | Get flow metric aggregate data by application
[**metricsGetEdgeAppSeries**](AllApi.md#metricsGetEdgeAppSeries) | **POST** /metrics/getEdgeAppSeries | Get flow metric time series data by application
[**metricsGetEdgeCategoryMetrics**](AllApi.md#metricsGetEdgeCategoryMetrics) | **POST** /metrics/getEdgeCategoryMetrics | Get flow metric aggregate data by application category
[**metricsGetEdgeCategorySeries**](AllApi.md#metricsGetEdgeCategorySeries) | **POST** /metrics/getEdgeCategorySeries | Get flow metric time series data by application category
[**metricsGetEdgeDestMetrics**](AllApi.md#metricsGetEdgeDestMetrics) | **POST** /metrics/getEdgeDestMetrics | Get flow metric aggregate data by destination
[**metricsGetEdgeDestSeries**](AllApi.md#metricsGetEdgeDestSeries) | **POST** /metrics/getEdgeDestSeries | Get flow metric time series data by destination
[**metricsGetEdgeDeviceMetrics**](AllApi.md#metricsGetEdgeDeviceMetrics) | **POST** /metrics/getEdgeDeviceMetrics | Get flow metric aggregate data by client device
[**metricsGetEdgeDeviceSeries**](AllApi.md#metricsGetEdgeDeviceSeries) | **POST** /metrics/getEdgeDeviceSeries | Get flow metric time series data by client device
[**metricsGetEdgeLinkMetrics**](AllApi.md#metricsGetEdgeLinkMetrics) | **POST** /metrics/getEdgeLinkMetrics | Get advanced flow metric aggregate data by link
[**metricsGetEdgeLinkSeries**](AllApi.md#metricsGetEdgeLinkSeries) | **POST** /metrics/getEdgeLinkSeries | Get advanced flow metric time series data by link
[**metricsGetEdgeOsMetrics**](AllApi.md#metricsGetEdgeOsMetrics) | **POST** /metrics/getEdgeOsMetrics | Get flow metric aggregate data by client OS
[**metricsGetEdgeOsSeries**](AllApi.md#metricsGetEdgeOsSeries) | **POST** /metrics/getEdgeOsSeries | Get flow metric time series data by client OS
[**metricsGetEdgeSegmentMetrics**](AllApi.md#metricsGetEdgeSegmentMetrics) | **POST** /metrics/getEdgeSegmentMetrics | Get flow metric aggregate data by segment Id
[**metricsGetEdgeSegmentSeries**](AllApi.md#metricsGetEdgeSegmentSeries) | **POST** /metrics/getEdgeSegmentSeries | Get flow metric time series data by segment id
[**monitoringGetAggregateEdgeLinkMetrics**](AllApi.md#monitoringGetAggregateEdgeLinkMetrics) | **POST** /monitoring/getAggregateEdgeLinkMetrics | Get aggregated edge link metrics across enterprises
[**monitoringGetAggregateEnterpriseEvents**](AllApi.md#monitoringGetAggregateEnterpriseEvents) | **POST** /monitoring/getAggregateEnterpriseEvents | Fetch all enterprise events
[**monitoringGetAggregates**](AllApi.md#monitoringGetAggregates) | **POST** /monitoring/getAggregates | Get aggregate enterprise and edge information
[**monitoringGetEnterpriseBgpPeerStatus**](AllApi.md#monitoringGetEnterpriseBgpPeerStatus) | **POST** /monitoring/getEnterpriseBgpPeerStatus | Get gateway BGP peer status for all enterprise gateways
[**monitoringGetEnterpriseEdgeBgpPeerStatus**](AllApi.md#monitoringGetEnterpriseEdgeBgpPeerStatus) | **POST** /monitoring/getEnterpriseEdgeBgpPeerStatus | Get edge BGP peer status for all enterprise edges
[**monitoringGetEnterpriseEdgeLinkStatus**](AllApi.md#monitoringGetEnterpriseEdgeLinkStatus) | **POST** /monitoring/getEnterpriseEdgeLinkStatus | Get edge and link status data
[**networkDeleteNetworkGatewayPool**](AllApi.md#networkDeleteNetworkGatewayPool) | **POST** /network/deleteNetworkGatewayPool | Delete a gateway pool
[**networkGetNetworkConfigurations**](AllApi.md#networkGetNetworkConfigurations) | **POST** /network/getNetworkConfigurations | Get operator configuration profiles
[**networkGetNetworkEnterprises**](AllApi.md#networkGetNetworkEnterprises) | **POST** /network/getNetworkEnterprises | Get a list of the enterprises on a network
[**networkGetNetworkGatewayPools**](AllApi.md#networkGetNetworkGatewayPools) | **POST** /network/getNetworkGatewayPools | Get list of gateway pools
[**networkGetNetworkGateways**](AllApi.md#networkGetNetworkGateways) | **POST** /network/getNetworkGateways | Get list of gateways
[**networkGetNetworkOperatorUsers**](AllApi.md#networkGetNetworkOperatorUsers) | **POST** /network/getNetworkOperatorUsers | Get list of operator users for a network
[**networkInsertNetworkGatewayPool**](AllApi.md#networkInsertNetworkGatewayPool) | **POST** /network/insertNetworkGatewayPool | Insert a gateway pool
[**networkUpdateNetworkGatewayPoolAttributes**](AllApi.md#networkUpdateNetworkGatewayPoolAttributes) | **POST** /network/updateNetworkGatwayPoolAttributes | Update gateway pool attributes
[**operatorUserDeleteOperatorUser**](AllApi.md#operatorUserDeleteOperatorUser) | **POST** /operatorUser/deleteOperatorUser | Delete an operator user
[**operatorUserGetOperatorUser**](AllApi.md#operatorUserGetOperatorUser) | **POST** /operatorUser/getOperatorUser | Get an operator user
[**operatorUserInsertOperatorUser**](AllApi.md#operatorUserInsertOperatorUser) | **POST** /operatorUser/insertOperatorUser | Insert an operator user
[**operatorUserUpdateOperatorUser**](AllApi.md#operatorUserUpdateOperatorUser) | **POST** /operatorUser/updateOperatorUser | Update an operator user
[**roleCreateRoleCustomization**](AllApi.md#roleCreateRoleCustomization) | **POST** /role/createRoleCustomization | Create a role customization
[**roleDeleteRoleCustomization**](AllApi.md#roleDeleteRoleCustomization) | **POST** /role/deleteRoleCustomization | Delete a role customization
[**roleGetUserTypeRoles**](AllApi.md#roleGetUserTypeRoles) | **POST** /role/getUserTypeRoles | Get the roles defined for a user type
[**roleSetEnterpriseDelegatedToEnterpriseProxy**](AllApi.md#roleSetEnterpriseDelegatedToEnterpriseProxy) | **POST** /role/setEnterpriseDelegatedToEnterpriseProxy | Grant enterprise access to an enterprise proxy
[**roleSetEnterpriseDelegatedToOperator**](AllApi.md#roleSetEnterpriseDelegatedToOperator) | **POST** /role/setEnterpriseDelegatedToOperator | Grant enterprise access to the network operator
[**roleSetEnterpriseProxyDelegatedToOperator**](AllApi.md#roleSetEnterpriseProxyDelegatedToOperator) | **POST** /role/setEnterpriseProxyDelegatedToOperator | Grant enterprise proxy access to the network operator
[**roleSetEnterpriseUserManagementDelegatedToOperator**](AllApi.md#roleSetEnterpriseUserManagementDelegatedToOperator) | **POST** /role/setEnterpriseUserManagementDelegatedToOperator | Grant enterprise user access to the network operator
[**systemPropertyGetSystemProperties**](AllApi.md#systemPropertyGetSystemProperties) | **POST** /systemProperty/getSystemProperties | Get all system properties
[**systemPropertyGetSystemProperty**](AllApi.md#systemPropertyGetSystemProperty) | **POST** /systemProperty/getSystemProperty | Get system property
[**systemPropertyInsertOrUpdateSystemProperty**](AllApi.md#systemPropertyInsertOrUpdateSystemProperty) | **POST** /systemProperty/insertOrUpdateSystemProperty | Insert or update a system property
[**systemPropertyInsertSystemProperty**](AllApi.md#systemPropertyInsertSystemProperty) | **POST** /systemProperty/insertSystemProperty | Insert a system property
[**systemPropertyUpdateSystemProperty**](AllApi.md#systemPropertyUpdateSystemProperty) | **POST** /systemProperty/updateSystemProperty | Update a system property
[**vcoInventoryAssociateEdge**](AllApi.md#vcoInventoryAssociateEdge) | **POST** /vcoInventory/associateEdge | Return inventory items available at this VCO
[**vcoInventoryGetInventoryItems**](AllApi.md#vcoInventoryGetInventoryItems) | **POST** /vcoInventory/getInventoryItems | Return inventory items available at this VCO


# **configurationCloneAndConvertConfiguration**
> \Swagger\Client\Model\ConfigurationCloneAndConvertConfigurationResult configurationCloneAndConvertConfiguration($body)

Clone and convert a network based profile configuration to segment based profile configuration

Clones an convert existing network configuration by configurationId. Accepts an enterpriseId or networkId to associate the new config with an enterprise or network. On success, returns an object the ID of the newly created configuration object.  Privileges required:  `CREATE` `ENTERPRISE_PROFILE`, or  `CREATE` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationCloneAndConvertConfiguration(); // \Swagger\Client\Model\ConfigurationCloneAndConvertConfiguration | 

try {
    $result = $apiInstance->configurationCloneAndConvertConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->configurationCloneAndConvertConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationCloneAndConvertConfiguration**](../Model/ConfigurationCloneAndConvertConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationCloneAndConvertConfigurationResult**](../Model/ConfigurationCloneAndConvertConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationCloneConfiguration**
> \Swagger\Client\Model\ConfigurationCloneConfigurationResult configurationCloneConfiguration($body)

Clone a configuration profile

Clones an existing configuration by configurationId. Accepts an enterpriseId or networkId to associate the new config with an enterprise or network. Select modules may also be specified. On success, returns an object the ID of the newly created configuration object.  Privileges required:  `CREATE` `ENTERPRISE_PROFILE`, or  `CREATE` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationCloneConfiguration(); // \Swagger\Client\Model\ConfigurationCloneConfiguration | 

try {
    $result = $apiInstance->configurationCloneConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->configurationCloneConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationCloneConfiguration**](../Model/ConfigurationCloneConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationCloneConfigurationResult**](../Model/ConfigurationCloneConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationCloneEnterpriseTemplate**
> \Swagger\Client\Model\ConfigurationCloneEnterpriseTemplateResult configurationCloneEnterpriseTemplate($body)

Clone the default enterprise configuration profile

Creates a new enterprise configuration from the enterprise default configuration. On success, returns an object the ID of the newly created configuration object.  Privileges required:  `CREATE` `ENTERPRISE_PROFILE`, or  `CREATE` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationCloneEnterpriseTemplate(); // \Swagger\Client\Model\ConfigurationCloneEnterpriseTemplate | 

try {
    $result = $apiInstance->configurationCloneEnterpriseTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->configurationCloneEnterpriseTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationCloneEnterpriseTemplate**](../Model/ConfigurationCloneEnterpriseTemplate.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationCloneEnterpriseTemplateResult**](../Model/ConfigurationCloneEnterpriseTemplateResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationDeleteConfiguration**
> \Swagger\Client\Model\ConfigurationDeleteConfigurationResult configurationDeleteConfiguration($body)

Delete a configuration profile

Delete an existing configuration profile. On success, returns an object indicating the number of rows deleted.  Privileges required:  `DELETE` `ENTERPRISE_PROFILE`, or  `DELETE` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationDeleteConfiguration(); // \Swagger\Client\Model\ConfigurationDeleteConfiguration | 

try {
    $result = $apiInstance->configurationDeleteConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->configurationDeleteConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationDeleteConfiguration**](../Model/ConfigurationDeleteConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationDeleteConfigurationResult**](../Model/ConfigurationDeleteConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationGetConfiguration**
> \Swagger\Client\Model\ConfigurationGetConfigurationResult configurationGetConfiguration($body)

Get a configuration profile

Get a configuration profile, optionally with module detail.  Privileges required:  `READ` `ENTERPRISE_PROFILE`, or  `READ` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationGetConfiguration(); // \Swagger\Client\Model\ConfigurationGetConfiguration | 

try {
    $result = $apiInstance->configurationGetConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->configurationGetConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationGetConfiguration**](../Model/ConfigurationGetConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationGetConfigurationResult**](../Model/ConfigurationGetConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationGetConfigurationModules**
> \Swagger\Client\Model\ConfigurationGetConfigurationModulesResultItem[] configurationGetConfigurationModules($body)

List the modules that compose a configuration profile

Retrieve a list of the configuration modules that compose the given configuration profile.  Privileges required:  `READ` `ENTERPRISE_PROFILE`, or  `READ` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationGetConfigurationModules(); // \Swagger\Client\Model\ConfigurationGetConfigurationModules | 

try {
    $result = $apiInstance->configurationGetConfigurationModules($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->configurationGetConfigurationModules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationGetConfigurationModules**](../Model/ConfigurationGetConfigurationModules.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationGetConfigurationModulesResultItem[]**](../Model/ConfigurationGetConfigurationModulesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationGetRoutableApplications**
> \Swagger\Client\Model\ConfigurationGetRoutableApplicationsResult configurationGetRoutableApplications($body)

List applications that are first packet routable

List the applications that are first packet routable. If called from the operator context, an enterprise ID may optionally be specified to filter the result set. Additionally, an edge ID may be specified to get the map for a specific edge.  Privileges required:  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationGetRoutableApplications(); // \Swagger\Client\Model\ConfigurationGetRoutableApplications | 

try {
    $result = $apiInstance->configurationGetRoutableApplications($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->configurationGetRoutableApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationGetRoutableApplications**](../Model/ConfigurationGetRoutableApplications.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationGetRoutableApplicationsResult**](../Model/ConfigurationGetRoutableApplicationsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationInsertConfigurationModule**
> \Swagger\Client\Model\ConfigurationInsertConfigurationModuleResult configurationInsertConfigurationModule($body)

Insert a new configuration module

Insert a new configuration module into the given configuration profile.  Privileges required:  `UPDATE` `ENTERPRISE_PROFILE`, or  `UPDATE` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationInsertConfigurationModule(); // \Swagger\Client\Model\ConfigurationInsertConfigurationModule | 

try {
    $result = $apiInstance->configurationInsertConfigurationModule($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->configurationInsertConfigurationModule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationInsertConfigurationModule**](../Model/ConfigurationInsertConfigurationModule.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationInsertConfigurationModuleResult**](../Model/ConfigurationInsertConfigurationModuleResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationUpdateConfigurationModule**
> \Swagger\Client\Model\ConfigurationUpdateConfigurationModuleResult configurationUpdateConfigurationModule($body)

Update a configuration module

Update an existing configuration module with the data. module data contained in the _update object.  Privileges required:  `UPDATE` `ENTERPRISE_PROFILE`, or  `UPDATE` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConfigurationUpdateConfigurationModule(); // \Swagger\Client\Model\ConfigurationUpdateConfigurationModule | 

try {
    $result = $apiInstance->configurationUpdateConfigurationModule($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->configurationUpdateConfigurationModule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConfigurationUpdateConfigurationModule**](../Model/ConfigurationUpdateConfigurationModule.md)|  |

### Return type

[**\Swagger\Client\Model\ConfigurationUpdateConfigurationModuleResult**](../Model/ConfigurationUpdateConfigurationModuleResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disasterRecoveryConfigureActiveForReplication**
> \Swagger\Client\Model\DisasterRecoveryConfigureActiveForReplicationResult disasterRecoveryConfigureActiveForReplication($body)

Designate a standby Orchestrator for disaster recovery replication

Configure the current Orchestrator to be active and the specified Orchestrator to be standby for Orchestrator disaster recovery replication. Required attributes are 1) standbyList, a single-entry array containing the standbyAddress and standbyUuid, 2) drVCOUser, a Orchestrator super user available on both the active and standby VCOs, and 3) drVCOPassword, the password of drVCOUser on the standby Orchestrator (unless the autoConfigStandby option is specified as false). The call sets up the active Orchestrator to allow replication from the standby and then (unless autoConfigStandby is false) makes a transitionToStandby API call to the specified standby, expected to have been previously placed in STANDBY_CANDIDATE state via prepareForStandby.  After this call, the active and standby VCOs should be polled via getReplicationStatus until they  both reach STANDBY_RUNNING drState (or a configuration error is reported).  (Note: the drVCOPassword is not persisted.)  Privileges required:  `CREATE` `REPLICATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryConfigureActiveForReplication(); // \Swagger\Client\Model\DisasterRecoveryConfigureActiveForReplication | 

try {
    $result = $apiInstance->disasterRecoveryConfigureActiveForReplication($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->disasterRecoveryConfigureActiveForReplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DisasterRecoveryConfigureActiveForReplication**](../Model/DisasterRecoveryConfigureActiveForReplication.md)|  |

### Return type

[**\Swagger\Client\Model\DisasterRecoveryConfigureActiveForReplicationResult**](../Model/DisasterRecoveryConfigureActiveForReplicationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disasterRecoveryDemoteActive**
> \Swagger\Client\Model\DisasterRecoveryDemoteActiveResult disasterRecoveryDemoteActive($body)

Demote current server from active to zombie

No input parameters are required.  The active server is expected to be in the drState FAILURE_GET_STANDBY_STATUS or FAILURE_MYSQL_ACTIVE_STATUS, meaning that DR protection had been engaged (with the last successful replication status observed at lastDRProtectedTime) but that active failed a health check since that time.  If the active server is in the drState STANDBY_RUNNING, meaning that it has detected no problems in interacting with the standby server, the operator can force demotion of the active using the optional parameter force passed with value of true; in this case, the operator must ensure the standby server has already been successfully promoted.  Privileges required:  `CREATE` `REPLICATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryDemoteActive(); // \Swagger\Client\Model\DisasterRecoveryDemoteActive | 

try {
    $result = $apiInstance->disasterRecoveryDemoteActive($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->disasterRecoveryDemoteActive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DisasterRecoveryDemoteActive**](../Model/DisasterRecoveryDemoteActive.md)|  |

### Return type

[**\Swagger\Client\Model\DisasterRecoveryDemoteActiveResult**](../Model/DisasterRecoveryDemoteActiveResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disasterRecoveryGetReplicationBlob**
> \Swagger\Client\Model\DisasterRecoveryGetReplicationBlobResult disasterRecoveryGetReplicationBlob($body)

Get the blob needed to configure replication on the standby

Get from the active Orchestrator the blob needed to configure replication on the standby. Only used when configureActiveForReplication was called with autoConfigStandby set to false [true by default].  Privileges required:  `CREATE` `REPLICATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryGetReplicationBlob(); // \Swagger\Client\Model\DisasterRecoveryGetReplicationBlob | 

try {
    $result = $apiInstance->disasterRecoveryGetReplicationBlob($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->disasterRecoveryGetReplicationBlob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DisasterRecoveryGetReplicationBlob**](../Model/DisasterRecoveryGetReplicationBlob.md)|  |

### Return type

[**\Swagger\Client\Model\DisasterRecoveryGetReplicationBlobResult**](../Model/DisasterRecoveryGetReplicationBlobResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disasterRecoveryGetReplicationStatus**
> \Swagger\Client\Model\DisasterRecoveryGetReplicationStatusResult disasterRecoveryGetReplicationStatus($body)

Get disaster recovery status

Get disaster recovery replication status, optionally with client contact, state transition history, and storage information.  No input parameters are required.  Can optionally specify 1 or more of the following with parameters: clientContact,clientCount,stateHistory,storageInfo.  Privileges required:  `READ` `REPLICATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryGetReplicationStatus(); // \Swagger\Client\Model\DisasterRecoveryGetReplicationStatus | 

try {
    $result = $apiInstance->disasterRecoveryGetReplicationStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->disasterRecoveryGetReplicationStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DisasterRecoveryGetReplicationStatus**](../Model/DisasterRecoveryGetReplicationStatus.md)|  |

### Return type

[**\Swagger\Client\Model\DisasterRecoveryGetReplicationStatusResult**](../Model/DisasterRecoveryGetReplicationStatusResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disasterRecoveryPrepareForStandby**
> \Swagger\Client\Model\DisasterRecoveryPrepareForStandbyResult disasterRecoveryPrepareForStandby($body)

Prepare current Orchestrator to be configured as a standby system

Transition current Orchestrator to quiesced state, ready to be configured as a standby system. No input parameters are required.  After this call, Orchestrator will be restarted in standby mode; caller should subsequently poll getReplicationStatus until drState is STANDBY_CANDIDATE.  This is the first step to configuring Orchestrator Disaster Recovery.  Privileges required:  `CREATE` `REPLICATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryPrepareForStandby(); // \Swagger\Client\Model\DisasterRecoveryPrepareForStandby | 

try {
    $result = $apiInstance->disasterRecoveryPrepareForStandby($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->disasterRecoveryPrepareForStandby: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DisasterRecoveryPrepareForStandby**](../Model/DisasterRecoveryPrepareForStandby.md)|  |

### Return type

[**\Swagger\Client\Model\DisasterRecoveryPrepareForStandbyResult**](../Model/DisasterRecoveryPrepareForStandbyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disasterRecoveryPromoteStandbyToActive**
> \Swagger\Client\Model\DisasterRecoveryPromoteStandbyToActiveResult disasterRecoveryPromoteStandbyToActive($body)

Promote the current server to take over as the single standalone VCO

The current server is expected to be a standby in the drState FAILURE_MYSQL_STANDBY_STATUS, meaning that DR protection had been engaged (with the last successful replication status observed at lastDRProtectedTime) but that standby has been unable to replicate since that time. If the standby server is in the drState STANDBY_RUNNING, meaning that it has detected no problems in replicating from the active server, the operator can force promotion of the standby using the optional parameter force passed with value of true; in this case, the standby server will call demoteActive/force on the active.  The operator should, if possible, ensure the formerly active server is demoted by running demoteServer directly on that server if the standby server was unable to do so successfully.  Privileges required:  `CREATE` `REPLICATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryPromoteStandbyToActive(); // \Swagger\Client\Model\DisasterRecoveryPromoteStandbyToActive | 

try {
    $result = $apiInstance->disasterRecoveryPromoteStandbyToActive($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->disasterRecoveryPromoteStandbyToActive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DisasterRecoveryPromoteStandbyToActive**](../Model/DisasterRecoveryPromoteStandbyToActive.md)|  |

### Return type

[**\Swagger\Client\Model\DisasterRecoveryPromoteStandbyToActiveResult**](../Model/DisasterRecoveryPromoteStandbyToActiveResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disasterRecoveryRemoveStandby**
> \Swagger\Client\Model\DisasterRecoveryRemoveStandbyResult disasterRecoveryRemoveStandby($body)

Unconfigure disaster recovery on the current server

Unconfigure disaster recovery on the current server.  Also, make a best-effort call to removeStandby on the paired DR server. No input parameters are required.  Privileges required:  `CREATE` `REPLICATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryRemoveStandby(); // \Swagger\Client\Model\DisasterRecoveryRemoveStandby | 

try {
    $result = $apiInstance->disasterRecoveryRemoveStandby($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->disasterRecoveryRemoveStandby: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DisasterRecoveryRemoveStandby**](../Model/DisasterRecoveryRemoveStandby.md)|  |

### Return type

[**\Swagger\Client\Model\DisasterRecoveryRemoveStandbyResult**](../Model/DisasterRecoveryRemoveStandbyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disasterRecoveryTransitionToStandby**
> \Swagger\Client\Model\DisasterRecoveryTransitionToStandbyResult disasterRecoveryTransitionToStandby($body)

Configure current Orchestrator to transition to standby in disaster recovery active/standby pair.

Configure current Orchestrator to transition to standby in disaster recovery active/standby pair. Requires parameter activeAccessFromStandby, which contains the data needed to configure standby. This data is produced by configureActiveForReplication, which by default, automatically calls transitionToStandby; an explicit call is only needed, with a blob obtained from getReplicationBlob, if configureActiveForReplication is called with autoConfigStandby set false.  Privileges required:  `CREATE` `REPLICATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DisasterRecoveryTransitionToStandby(); // \Swagger\Client\Model\DisasterRecoveryTransitionToStandby | 

try {
    $result = $apiInstance->disasterRecoveryTransitionToStandby($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->disasterRecoveryTransitionToStandby: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DisasterRecoveryTransitionToStandby**](../Model/DisasterRecoveryTransitionToStandby.md)|  |

### Return type

[**\Swagger\Client\Model\DisasterRecoveryTransitionToStandbyResult**](../Model/DisasterRecoveryTransitionToStandbyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeDeleteEdge**
> \Swagger\Client\Model\EdgeDeleteEdgeResultItem[] edgeDeleteEdge($body)

Delete an edge

Delete an edge by id.  Privileges required:  `DELETE` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeDeleteEdge(); // \Swagger\Client\Model\EdgeDeleteEdge | 

try {
    $result = $apiInstance->edgeDeleteEdge($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeDeleteEdge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeDeleteEdge**](../Model/EdgeDeleteEdge.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeDeleteEdgeResultItem[]**](../Model/EdgeDeleteEdgeResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeDeleteEdgeBgpNeighborRecords**
> \Swagger\Client\Model\EdgeDeleteEdgeBgpNeighborRecordsResult edgeDeleteEdgeBgpNeighborRecords($body)

Delete edge BGP neighbor records

Deletes BGP record(s) matching the given record keys (neighborIp) on the edges with the given IDs, if they exist.  Privileges required:  `DELETE` `NETWORK_SERVICE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeDeleteEdgeBgpNeighborRecords(); // \Swagger\Client\Model\EdgeDeleteEdgeBgpNeighborRecords | 

try {
    $result = $apiInstance->edgeDeleteEdgeBgpNeighborRecords($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeDeleteEdgeBgpNeighborRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeDeleteEdgeBgpNeighborRecords**](../Model/EdgeDeleteEdgeBgpNeighborRecords.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeDeleteEdgeBgpNeighborRecordsResult**](../Model/EdgeDeleteEdgeBgpNeighborRecordsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeEdgeCancelReactivation**
> \Swagger\Client\Model\EdgeEdgeCancelReactivationResult edgeEdgeCancelReactivation($body)

Cancel a pending edge reactivation request

Cancel a pending reactivation edge reactivation request.  Privileges required:  `CREATE` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeEdgeCancelReactivation(); // \Swagger\Client\Model\EdgeEdgeCancelReactivation | 

try {
    $result = $apiInstance->edgeEdgeCancelReactivation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeEdgeCancelReactivation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeEdgeCancelReactivation**](../Model/EdgeEdgeCancelReactivation.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeEdgeCancelReactivationResult**](../Model/EdgeEdgeCancelReactivationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeEdgeProvision**
> \Swagger\Client\Model\EdgeEdgeProvisionResult edgeEdgeProvision($body)

Provision an edge

Provision an edge prior to activation.  Privileges required:  `CREATE` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeEdgeProvision(); // \Swagger\Client\Model\EdgeEdgeProvision | 

try {
    $result = $apiInstance->edgeEdgeProvision($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeEdgeProvision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeEdgeProvision**](../Model/EdgeEdgeProvision.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeEdgeProvisionResult**](../Model/EdgeEdgeProvisionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeEdgeRequestReactivation**
> \Swagger\Client\Model\EdgeEdgeRequestReactivationResult edgeEdgeRequestReactivation($body)

Reactivate an edge

Update activation state for an edge to REACTIVATION_PENDING.  Privileges required:  `CREATE` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeEdgeRequestReactivation(); // \Swagger\Client\Model\EdgeEdgeRequestReactivation | 

try {
    $result = $apiInstance->edgeEdgeRequestReactivation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeEdgeRequestReactivation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeEdgeRequestReactivation**](../Model/EdgeEdgeRequestReactivation.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeEdgeRequestReactivationResult**](../Model/EdgeEdgeRequestReactivationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeGetClientVisibilityMode**
> \Swagger\Client\Model\EdgeGetClientVisibilityModeResult edgeGetClientVisibilityMode($body)

Get an edge's client visibility mode

Retrieve an edge's client visibility mode.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeGetClientVisibilityMode(); // \Swagger\Client\Model\EdgeGetClientVisibilityMode | 

try {
    $result = $apiInstance->edgeGetClientVisibilityMode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeGetClientVisibilityMode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeGetClientVisibilityMode**](../Model/EdgeGetClientVisibilityMode.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeGetClientVisibilityModeResult**](../Model/EdgeGetClientVisibilityModeResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeGetEdge**
> \Swagger\Client\Model\EdgeGetEdgeResult edgeGetEdge($body)

Get edge

Get VELOCLOUD_EDGE object, with optional link, site, enterprise, or configuration information. Query by object id, deviceId, activationKey or logicalId. All four values are unique so are sufficient to identify a single edge in the database.  Privileges required:  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeGetEdge(); // \Swagger\Client\Model\EdgeGetEdge | 

try {
    $result = $apiInstance->edgeGetEdge($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeGetEdge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeGetEdge**](../Model/EdgeGetEdge.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeGetEdgeResult**](../Model/EdgeGetEdgeResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeGetEdgeConfigurationStack**
> \Swagger\Client\Model\EdgeGetEdgeConfigurationStackResultItem[] edgeGetEdgeConfigurationStack($body)

Get an edge's configuration stack

Retrieve an edge's complete configuration profile, with all modules included.  Privileges required:  `READ` `EDGE`  `READ` `ENTERPRISE_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeGetEdgeConfigurationStack(); // \Swagger\Client\Model\EdgeGetEdgeConfigurationStack | 

try {
    $result = $apiInstance->edgeGetEdgeConfigurationStack($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeGetEdgeConfigurationStack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeGetEdgeConfigurationStack**](../Model/EdgeGetEdgeConfigurationStack.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeGetEdgeConfigurationStackResultItem[]**](../Model/EdgeGetEdgeConfigurationStackResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeSetEdgeEnterpriseConfiguration**
> \Swagger\Client\Model\EdgeSetEdgeEnterpriseConfigurationResult edgeSetEdgeEnterpriseConfiguration($body)

Apply an enterprise configuration to an Edge

Set an edge's enterprise configuration, overriding the enterprise default for an edge.  Privileges required:  `UPDATE` `EDGE`  `UPDATE` `ENTERPRISE_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeSetEdgeEnterpriseConfiguration(); // \Swagger\Client\Model\EdgeSetEdgeEnterpriseConfiguration | 

try {
    $result = $apiInstance->edgeSetEdgeEnterpriseConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeSetEdgeEnterpriseConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeSetEdgeEnterpriseConfiguration**](../Model/EdgeSetEdgeEnterpriseConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeSetEdgeEnterpriseConfigurationResult**](../Model/EdgeSetEdgeEnterpriseConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeSetEdgeHandOffGateways**
> \Swagger\Client\Model\EdgeSetEdgeHandOffGatewaysResult edgeSetEdgeHandOffGateways($body)

Set an edge's on-premise hand off gateways

Set an edge's on-premise hand off gateways. A primary and secondary gateway are defined, primary is required, secondary is optional. All existing edge-gateway hand off relationships are moved and are replaced by the the specified primary and secondary gateways.  Privileges required:  `UPDATE` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeSetEdgeHandOffGateways(); // \Swagger\Client\Model\EdgeSetEdgeHandOffGateways | 

try {
    $result = $apiInstance->edgeSetEdgeHandOffGateways($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeSetEdgeHandOffGateways: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeSetEdgeHandOffGateways**](../Model/EdgeSetEdgeHandOffGateways.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeSetEdgeHandOffGatewaysResult**](../Model/EdgeSetEdgeHandOffGatewaysResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeSetEdgeOperatorConfiguration**
> \Swagger\Client\Model\EdgeSetEdgeOperatorConfigurationResult edgeSetEdgeOperatorConfiguration($body)

Apply an operator configuration to an Edge

Set an Edge's operator configuration. This overrides any enterprise-assigned operator configuration and the network default operator configuration.  Privileges required:  `UPDATE` `EDGE`  `READ` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeSetEdgeOperatorConfiguration(); // \Swagger\Client\Model\EdgeSetEdgeOperatorConfiguration | 

try {
    $result = $apiInstance->edgeSetEdgeOperatorConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeSetEdgeOperatorConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeSetEdgeOperatorConfiguration**](../Model/EdgeSetEdgeOperatorConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeSetEdgeOperatorConfigurationResult**](../Model/EdgeSetEdgeOperatorConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeUpdateEdgeAdminPassword**
> \Swagger\Client\Model\EdgeUpdateEdgeAdminPasswordResult edgeUpdateEdgeAdminPassword($body)

Update edge's local UI authentication credentials

Request an update to the edge's local UI authentication credentials. On success, returns a JSON object with the ID of the action queued, status for which can be queried using the edgeAction/getEdgeAction API  Privileges required:  `UPDATE` `EDGE`  `UPDATE` `ENTERPRISE_KEYS`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeUpdateEdgeAdminPassword(); // \Swagger\Client\Model\EdgeUpdateEdgeAdminPassword | 

try {
    $result = $apiInstance->edgeUpdateEdgeAdminPassword($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeUpdateEdgeAdminPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeUpdateEdgeAdminPassword**](../Model/EdgeUpdateEdgeAdminPassword.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeUpdateEdgeAdminPasswordResult**](../Model/EdgeUpdateEdgeAdminPasswordResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeUpdateEdgeAttributes**
> \Swagger\Client\Model\EdgeUpdateEdgeAttributesResult edgeUpdateEdgeAttributes($body)

Update edge attributes

Update basic edge attributes, including edge name, description, site information, or serial number.  Privileges required:  `UPDATE` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeUpdateEdgeAttributes(); // \Swagger\Client\Model\EdgeUpdateEdgeAttributes | 

try {
    $result = $apiInstance->edgeUpdateEdgeAttributes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeUpdateEdgeAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeUpdateEdgeAttributes**](../Model/EdgeUpdateEdgeAttributes.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeUpdateEdgeAttributesResult**](../Model/EdgeUpdateEdgeAttributesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **edgeUpdateEdgeCredentialsByConfiguration**
> \Swagger\Client\Model\EdgeUpdateEdgeCredentialsByConfigurationResult edgeUpdateEdgeCredentialsByConfiguration($body)

Update edge UI credentials by configuration id

Request an update to the edge-local UI authentication credentials for all edges belonging to a configuration profile. On success, returns a JSON object containing a list of each of the action IDs queued.  Privileges required:  `UPDATE` `EDGE`  `UPDATE` `ENTERPRISE_KEYS`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EdgeUpdateEdgeCredentialsByConfiguration(); // \Swagger\Client\Model\EdgeUpdateEdgeCredentialsByConfiguration | 

try {
    $result = $apiInstance->edgeUpdateEdgeCredentialsByConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->edgeUpdateEdgeCredentialsByConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EdgeUpdateEdgeCredentialsByConfiguration**](../Model/EdgeUpdateEdgeCredentialsByConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\EdgeUpdateEdgeCredentialsByConfigurationResult**](../Model/EdgeUpdateEdgeCredentialsByConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseDeleteEnterprise**
> \Swagger\Client\Model\EnterpriseDeleteEnterpriseResult enterpriseDeleteEnterprise($body)

Delete an enterprise

Delete the enterprise specified by the given id parameter. enterpriseId is also a valid alias for id.  Privileges required:  `DELETE` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseDeleteEnterprise(); // \Swagger\Client\Model\EnterpriseDeleteEnterprise | 

try {
    $result = $apiInstance->enterpriseDeleteEnterprise($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseDeleteEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseDeleteEnterprise**](../Model/EnterpriseDeleteEnterprise.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseDeleteEnterpriseResult**](../Model/EnterpriseDeleteEnterpriseResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseDeleteEnterpriseGatewayRecords**
> \Swagger\Client\Model\EnterpriseDeleteEnterpriseGatewayRecordsResult enterpriseDeleteEnterpriseGatewayRecords($body)

Delete enterprise gateway record(s)

Delete the enterprise gateway record(s) matching the given gateway id(s) and neighbor IP addresses.  Privileges required:  `DELETE` `NETWORK_SERVICE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseDeleteEnterpriseGatewayRecords(); // \Swagger\Client\Model\EnterpriseDeleteEnterpriseGatewayRecords | 

try {
    $result = $apiInstance->enterpriseDeleteEnterpriseGatewayRecords($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseDeleteEnterpriseGatewayRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseDeleteEnterpriseGatewayRecords**](../Model/EnterpriseDeleteEnterpriseGatewayRecords.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseDeleteEnterpriseGatewayRecordsResult**](../Model/EnterpriseDeleteEnterpriseGatewayRecordsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseDeleteEnterpriseNetworkAllocation**
> \Swagger\Client\Model\EnterpriseDeleteEnterpriseNetworkAllocationResult enterpriseDeleteEnterpriseNetworkAllocation($body)

Delete an enterprise network allocation

Delete an enterprise network allocation, by id.  Privileges required:  `DELETE` `NETWORK_ALLOCATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseDeleteEnterpriseNetworkAllocation(); // \Swagger\Client\Model\EnterpriseDeleteEnterpriseNetworkAllocation | 

try {
    $result = $apiInstance->enterpriseDeleteEnterpriseNetworkAllocation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseDeleteEnterpriseNetworkAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseDeleteEnterpriseNetworkAllocation**](../Model/EnterpriseDeleteEnterpriseNetworkAllocation.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseDeleteEnterpriseNetworkAllocationResult**](../Model/EnterpriseDeleteEnterpriseNetworkAllocationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseDeleteEnterpriseService**
> \Swagger\Client\Model\EnterpriseDeleteEnterpriseServiceResult enterpriseDeleteEnterpriseService($body)

Delete an enterprise service

Delete an enterprise service, by id.  Privileges required:  `DELETE` `NETWORK_SERVICE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseDeleteEnterpriseService(); // \Swagger\Client\Model\EnterpriseDeleteEnterpriseService | 

try {
    $result = $apiInstance->enterpriseDeleteEnterpriseService($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseDeleteEnterpriseService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseDeleteEnterpriseService**](../Model/EnterpriseDeleteEnterpriseService.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseDeleteEnterpriseServiceResult**](../Model/EnterpriseDeleteEnterpriseServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterprise**
> \Swagger\Client\Model\EnterpriseGetEnterpriseResult enterpriseGetEnterprise($body)

Get enterprise

Retrieve enterprise data, with optional proxy (partner) detail.  Privileges required:  `READ` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterprise(); // \Swagger\Client\Model\EnterpriseGetEnterprise | 

try {
    $result = $apiInstance->enterpriseGetEnterprise($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterprise**](../Model/EnterpriseGetEnterprise.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseResult**](../Model/EnterpriseGetEnterpriseResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseAddresses**
> \Swagger\Client\Model\EnterpriseGetEnterpriseAddressesResultItem[] enterpriseGetEnterpriseAddresses($body)

Get enterprise IP address information

Retrieve the public IP address information for the management and control entities associated with this enterprise, including Orchestrator(s), Gateway(s), and datacenter(s).  Privileges required:  `READ` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseAddresses(); // \Swagger\Client\Model\EnterpriseGetEnterpriseAddresses | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseAddresses($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseAddresses**](../Model/EnterpriseGetEnterpriseAddresses.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseAddressesResultItem[]**](../Model/EnterpriseGetEnterpriseAddressesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseAlertConfigurations**
> \Swagger\Client\Model\EnterpriseGetEnterpriseAlertConfigurationsResultItem[] enterpriseGetEnterpriseAlertConfigurations($body)

Get the enterprise alert configuration

Get the alert configurations associated with an enterprise.  Privileges required:  `READ` `ENTERPRISE_ALERT`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseAlertConfigurations(); // \Swagger\Client\Model\EnterpriseGetEnterpriseAlertConfigurations | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseAlertConfigurations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseAlertConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseAlertConfigurations**](../Model/EnterpriseGetEnterpriseAlertConfigurations.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseAlertConfigurationsResultItem[]**](../Model/EnterpriseGetEnterpriseAlertConfigurationsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseAlerts**
> \Swagger\Client\Model\EnterpriseGetEnterpriseAlertsResult enterpriseGetEnterpriseAlerts($body)

Get a list of the alerts triggered for the enterprise

Get a list of past alerts triggered for the enterprise.  Privileges required:  `READ` `ENTERPRISE_ALERT`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseAlerts(); // \Swagger\Client\Model\EnterpriseGetEnterpriseAlerts | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseAlerts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseAlerts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseAlerts**](../Model/EnterpriseGetEnterpriseAlerts.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseAlertsResult**](../Model/EnterpriseGetEnterpriseAlertsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseAllAlertRecipients**
> \Swagger\Client\Model\EnterpriseGetEnterpriseAllAlertRecipientsResult enterpriseGetEnterpriseAllAlertRecipients($body)

List recipients currently receiving ALL enterprise alerts

List the recipients currently configured to receive all alerts for an enterprise.  Privileges required:  `READ` `ENTERPRISE_ALERT`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseAllAlertRecipients(); // \Swagger\Client\Model\EnterpriseGetEnterpriseAllAlertRecipients | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseAllAlertRecipients($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseAllAlertRecipients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseAllAlertRecipients**](../Model/EnterpriseGetEnterpriseAllAlertRecipients.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseAllAlertRecipientsResult**](../Model/EnterpriseGetEnterpriseAllAlertRecipientsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseCapabilities**
> \Swagger\Client\Model\EnterpriseGetEnterpriseCapabilitiesResult enterpriseGetEnterpriseCapabilities($body)

Get enterprise capabilities

Retrieve a list of the enterprise capabilities currently enabled/disabled on an enterprise (e.g. BGP, COS mapping, PKI, etc.)  Privileges required:  `READ` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseCapabilities(); // \Swagger\Client\Model\EnterpriseGetEnterpriseCapabilities | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseCapabilities($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseCapabilities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseCapabilities**](../Model/EnterpriseGetEnterpriseCapabilities.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseCapabilitiesResult**](../Model/EnterpriseGetEnterpriseCapabilitiesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseConfigurations**
> \Swagger\Client\Model\EnterpriseGetEnterpriseConfigurationsResultItem[] enterpriseGetEnterpriseConfigurations($body)

Get enterprise configuration profiles

Retrieve a list of configuration profiles existing on an enterprise, with optional edge and/or module detail.  Privileges required:  `READ` `ENTERPRISE_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseConfigurations(); // \Swagger\Client\Model\EnterpriseGetEnterpriseConfigurations | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseConfigurations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseConfigurations**](../Model/EnterpriseGetEnterpriseConfigurations.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseConfigurationsResultItem[]**](../Model/EnterpriseGetEnterpriseConfigurationsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseEdges**
> \Swagger\Client\Model\EnterpriseGetEnterpriseEdgesResultItem[] enterpriseGetEnterpriseEdges($body)

Get edges associated with an enterprise

Get the edges associated with an enterprise, with optional location and link detail.  Privileges required:  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseEdges(); // \Swagger\Client\Model\EnterpriseGetEnterpriseEdges | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseEdges($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseEdges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseEdges**](../Model/EnterpriseGetEnterpriseEdges.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseEdgesResultItem[]**](../Model/EnterpriseGetEnterpriseEdgesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseGatewayHandoff**
> \Swagger\Client\Model\EnterpriseGetEnterpriseGatewayHandoffResult enterpriseGetEnterpriseGatewayHandoff($body)

Get enterprise gateway handoff configuration

Get enterprise gateway handoff configuration.  Privileges required:  `READ` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseGatewayHandoff(); // \Swagger\Client\Model\EnterpriseGetEnterpriseGatewayHandoff | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseGatewayHandoff($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseGatewayHandoff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseGatewayHandoff**](../Model/EnterpriseGetEnterpriseGatewayHandoff.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseGatewayHandoffResult**](../Model/EnterpriseGetEnterpriseGatewayHandoffResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseNetworkAllocation**
> \Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocationResult enterpriseGetEnterpriseNetworkAllocation($body)

Get an enterprise network allocation

Retrieve a network allocation object by id.  Privileges required:  `READ` `NETWORK_ALLOCATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocation(); // \Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocation | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseNetworkAllocation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseNetworkAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocation**](../Model/EnterpriseGetEnterpriseNetworkAllocation.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocationResult**](../Model/EnterpriseGetEnterpriseNetworkAllocationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseNetworkAllocations**
> \Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocationsResultItem[] enterpriseGetEnterpriseNetworkAllocations($body)

Get all network allocation objects defined on an enterprise

Retrieve a list of all of the network allocations defined onthe given enterprise.  Privileges required:  `READ` `NETWORK_ALLOCATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocations(); // \Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocations | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseNetworkAllocations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseNetworkAllocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocations**](../Model/EnterpriseGetEnterpriseNetworkAllocations.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseNetworkAllocationsResultItem[]**](../Model/EnterpriseGetEnterpriseNetworkAllocationsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseProperty**
> \Swagger\Client\Model\EnterpriseGetEnterprisePropertyResult enterpriseGetEnterpriseProperty($body)

Get enterprise property

Get a enterprise property by object id or other attribute.  Privileges required:  `READ` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseProperty(); // \Swagger\Client\Model\EnterpriseGetEnterpriseProperty | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseProperty**](../Model/EnterpriseGetEnterpriseProperty.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterprisePropertyResult**](../Model/EnterpriseGetEnterprisePropertyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseRouteConfiguration**
> \Swagger\Client\Model\EnterpriseGetEnterpriseRouteConfigurationResult enterpriseGetEnterpriseRouteConfiguration($body)

Get route advertisement and routing preferences policy

Get enterprise route advertisement, routing peferences and OSPF, BGP advertisement policy as configured in the Overlay Flow Control table.  Privileges required:  `READ` `ENTERPRISE_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseRouteConfiguration(); // \Swagger\Client\Model\EnterpriseGetEnterpriseRouteConfiguration | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseRouteConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseRouteConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseRouteConfiguration**](../Model/EnterpriseGetEnterpriseRouteConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseRouteConfigurationResult**](../Model/EnterpriseGetEnterpriseRouteConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseRouteTable**
> \Swagger\Client\Model\EnterpriseGetEnterpriseRouteTableResult enterpriseGetEnterpriseRouteTable($body)

Get the enterprise route table

Get composite enterprise route table, optionally scoped by profile(s). The returned routes include static routes, directly connected routes and learned routes.  Privileges required:  `READ` `ENTERPRISE_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseRouteTable(); // \Swagger\Client\Model\EnterpriseGetEnterpriseRouteTable | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseRouteTable($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseRouteTable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseRouteTable**](../Model/EnterpriseGetEnterpriseRouteTable.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseRouteTableResult**](../Model/EnterpriseGetEnterpriseRouteTableResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseServices**
> \Swagger\Client\Model\EnterpriseGetEnterpriseServicesResultItem[] enterpriseGetEnterpriseServices($body)

Get enterprise network service detail

Get the network service JSON objects defined for an enterprise.  Privileges required:  `READ` `NETWORK_SERVICE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseServices(); // \Swagger\Client\Model\EnterpriseGetEnterpriseServices | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseServices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseServices**](../Model/EnterpriseGetEnterpriseServices.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseServicesResultItem[]**](../Model/EnterpriseGetEnterpriseServicesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseGetEnterpriseUsers**
> \Swagger\Client\Model\EnterpriseGetEnterpriseUsersResultItem[] enterpriseGetEnterpriseUsers($body)

Get list of enterprise users by enterprise id

undefined  Privileges required:  `READ` `ENTERPRISE`  `READ` `ENTERPRISE_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseGetEnterpriseUsers(); // \Swagger\Client\Model\EnterpriseGetEnterpriseUsers | 

try {
    $result = $apiInstance->enterpriseGetEnterpriseUsers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseGetEnterpriseUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseGetEnterpriseUsers**](../Model/EnterpriseGetEnterpriseUsers.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseGetEnterpriseUsersResultItem[]**](../Model/EnterpriseGetEnterpriseUsersResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertEnterprise**
> \Swagger\Client\Model\EnterpriseInsertEnterpriseResult enterpriseInsertEnterprise($body)

Insert a new enterprise

Insert an enterprise, owned by the operator or an MSP.  Privileges required:  `CREATE` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertEnterprise(); // \Swagger\Client\Model\EnterpriseInsertEnterprise | 

try {
    $result = $apiInstance->enterpriseInsertEnterprise($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseInsertEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertEnterprise**](../Model/EnterpriseInsertEnterprise.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseInsertEnterpriseResult**](../Model/EnterpriseInsertEnterpriseResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertEnterpriseNetworkAllocation**
> \Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkAllocationResult enterpriseInsertEnterpriseNetworkAllocation($body)

Insert an enterprise network allocation

Insert a new enterprise network allocation.  Privileges required:  `CREATE` `NETWORK_ALLOCATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkAllocation(); // \Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkAllocation | 

try {
    $result = $apiInstance->enterpriseInsertEnterpriseNetworkAllocation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseInsertEnterpriseNetworkAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkAllocation**](../Model/EnterpriseInsertEnterpriseNetworkAllocation.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkAllocationResult**](../Model/EnterpriseInsertEnterpriseNetworkAllocationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertEnterpriseNetworkSegment**
> \Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkSegmentResult enterpriseInsertEnterpriseNetworkSegment($body)

Insert an enterprise network segment

Insert a new enterprise network segment.  Privileges required:  `CREATE` `NETWORK_ALLOCATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkSegment(); // \Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkSegment | 

try {
    $result = $apiInstance->enterpriseInsertEnterpriseNetworkSegment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseInsertEnterpriseNetworkSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkSegment**](../Model/EnterpriseInsertEnterpriseNetworkSegment.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseInsertEnterpriseNetworkSegmentResult**](../Model/EnterpriseInsertEnterpriseNetworkSegmentResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertEnterpriseService**
> \Swagger\Client\Model\EnterpriseInsertEnterpriseServiceResult enterpriseInsertEnterpriseService($body)

Insert a new enterprise service

Insert a new enterprise service.  Privileges required:  `CREATE` `NETWORK_SERVICE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertEnterpriseService(); // \Swagger\Client\Model\EnterpriseInsertEnterpriseService | 

try {
    $result = $apiInstance->enterpriseInsertEnterpriseService($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseInsertEnterpriseService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertEnterpriseService**](../Model/EnterpriseInsertEnterpriseService.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseInsertEnterpriseServiceResult**](../Model/EnterpriseInsertEnterpriseServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertEnterpriseUser**
> \Swagger\Client\Model\EnterpriseInsertEnterpriseUserResult enterpriseInsertEnterpriseUser($body)

Insert an enterprise user

Insert an enterprise user.  Privileges required:  `CREATE` `ENTERPRISE_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NewEnterpriseUser(); // \Swagger\Client\Model\NewEnterpriseUser | 

try {
    $result = $apiInstance->enterpriseInsertEnterpriseUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseInsertEnterpriseUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewEnterpriseUser**](../Model/NewEnterpriseUser.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseInsertEnterpriseUserResult**](../Model/EnterpriseInsertEnterpriseUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertOrUpdateEnterpriseAlertConfigurations**
> \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseAlertConfigurationsResult enterpriseInsertOrUpdateEnterpriseAlertConfigurations($body)

Insert, update, or delete enterprise alert configurations

Insert, update, or delete enterprise alert configurations. Returns the array of alert configurations submitted, with ids added for the entries that have been successfully inserted. If an entry is not successfully inserted or updated, an `error` property is included in the .  Privileges required:  `CREATE` `ENTERPRISE_ALERT`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseAlertConfigurations(); // \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseAlertConfigurations | 

try {
    $result = $apiInstance->enterpriseInsertOrUpdateEnterpriseAlertConfigurations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseInsertOrUpdateEnterpriseAlertConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseAlertConfigurations**](../Model/EnterpriseInsertOrUpdateEnterpriseAlertConfigurations.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseAlertConfigurationsResult**](../Model/EnterpriseInsertOrUpdateEnterpriseAlertConfigurationsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertOrUpdateEnterpriseCapability**
> \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseCapabilityResult enterpriseInsertOrUpdateEnterpriseCapability($body)

Insert or update an enterprise capability

Insert or update an enterprise capability.  Privileges required:  `UPDATE` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseCapability(); // \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseCapability | 

try {
    $result = $apiInstance->enterpriseInsertOrUpdateEnterpriseCapability($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseInsertOrUpdateEnterpriseCapability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseCapability**](../Model/EnterpriseInsertOrUpdateEnterpriseCapability.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseCapabilityResult**](../Model/EnterpriseInsertOrUpdateEnterpriseCapabilityResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertOrUpdateEnterpriseGatewayHandoff**
> \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseGatewayHandoffResult enterpriseInsertOrUpdateEnterpriseGatewayHandoff($body)

Insert or update an enterprise gateway handoff configuration

Insert or update an enterprise gateway handoff configuration.  Privileges required:  `UPDATE` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseGatewayHandoff(); // \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseGatewayHandoff | 

try {
    $result = $apiInstance->enterpriseInsertOrUpdateEnterpriseGatewayHandoff($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseInsertOrUpdateEnterpriseGatewayHandoff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseGatewayHandoff**](../Model/EnterpriseInsertOrUpdateEnterpriseGatewayHandoff.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseGatewayHandoffResult**](../Model/EnterpriseInsertOrUpdateEnterpriseGatewayHandoffResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseInsertOrUpdateEnterpriseProperty**
> \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterprisePropertyResult enterpriseInsertOrUpdateEnterpriseProperty($body)

Insert or update an enterprise property

Insert a enterprise property. If property with the given name already exists, the property will be updated.  Privileges required:  `READ` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseProperty(); // \Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseProperty | 

try {
    $result = $apiInstance->enterpriseInsertOrUpdateEnterpriseProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseInsertOrUpdateEnterpriseProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseInsertOrUpdateEnterpriseProperty**](../Model/EnterpriseInsertOrUpdateEnterpriseProperty.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseInsertOrUpdateEnterprisePropertyResult**](../Model/EnterpriseInsertOrUpdateEnterprisePropertyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyDeleteEnterpriseProxyUser**
> \Swagger\Client\Model\EnterpriseProxyDeleteEnterpriseProxyUserResult enterpriseProxyDeleteEnterpriseProxyUser($body)

Delete an enterprise proxy admin user

Delete an enterprise proxy user by id or username. Note that `enterpriseProxyId` is a required parameter when invoking this method as an operator or partner user.  Privileges required:  `DELETE` `PROXY_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyDeleteEnterpriseProxyUser(); // \Swagger\Client\Model\EnterpriseProxyDeleteEnterpriseProxyUser | 

try {
    $result = $apiInstance->enterpriseProxyDeleteEnterpriseProxyUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseProxyDeleteEnterpriseProxyUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyDeleteEnterpriseProxyUser**](../Model/EnterpriseProxyDeleteEnterpriseProxyUser.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyDeleteEnterpriseProxyUserResult**](../Model/EnterpriseProxyDeleteEnterpriseProxyUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyGetEnterpriseProxyEdgeInventory**
> \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEdgeInventoryResultItem[] enterpriseProxyGetEnterpriseProxyEdgeInventory($body)

Get a list of all partner enterprises and edge inventory associated with each enterprise

Get  partner enterprises and their edge inventory.  Privileges required:  `READ` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEdgeInventory(); // \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEdgeInventory | 

try {
    $result = $apiInstance->enterpriseProxyGetEnterpriseProxyEdgeInventory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseProxyGetEnterpriseProxyEdgeInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEdgeInventory**](../Model/EnterpriseProxyGetEnterpriseProxyEdgeInventory.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEdgeInventoryResultItem[]**](../Model/EnterpriseProxyGetEnterpriseProxyEdgeInventoryResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyGetEnterpriseProxyEnterprises**
> \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEnterprisesResultItem[] enterpriseProxyGetEnterpriseProxyEnterprises($body)

Get a list of all partner enterprises

Get all partner enterprises, optionally including all edges or edge counts.  Privileges required:  `READ` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEnterprises(); // \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEnterprises | 

try {
    $result = $apiInstance->enterpriseProxyGetEnterpriseProxyEnterprises($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseProxyGetEnterpriseProxyEnterprises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEnterprises**](../Model/EnterpriseProxyGetEnterpriseProxyEnterprises.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyEnterprisesResultItem[]**](../Model/EnterpriseProxyGetEnterpriseProxyEnterprisesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyGetEnterpriseProxyGatewayPools**
> \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyGatewayPoolsResultItem[] enterpriseProxyGetEnterpriseProxyGatewayPools($body)

Get list of gateway pools

Get list of gateway pools associated with an enterprise proxy, optionally with lists of gateways or enterprises belonging to each pool.  Privileges required:  `READ` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyGatewayPools(); // \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyGatewayPools | 

try {
    $result = $apiInstance->enterpriseProxyGetEnterpriseProxyGatewayPools($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseProxyGetEnterpriseProxyGatewayPools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyGatewayPools**](../Model/EnterpriseProxyGetEnterpriseProxyGatewayPools.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyGatewayPoolsResultItem[]**](../Model/EnterpriseProxyGetEnterpriseProxyGatewayPoolsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyGetEnterpriseProxyOperatorProfiles**
> \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyOperatorProfilesResultItem[] enterpriseProxyGetEnterpriseProxyOperatorProfiles($body)

Get the operator profiles associated with a partner

Get the operator profiles associated with a proxy (MSP), as assigned by the operator.  Privileges required:  `READ` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyOperatorProfiles(); // \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyOperatorProfiles | 

try {
    $result = $apiInstance->enterpriseProxyGetEnterpriseProxyOperatorProfiles($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseProxyGetEnterpriseProxyOperatorProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyOperatorProfiles**](../Model/EnterpriseProxyGetEnterpriseProxyOperatorProfiles.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyOperatorProfilesResultItem[]**](../Model/EnterpriseProxyGetEnterpriseProxyOperatorProfilesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyGetEnterpriseProxyUser**
> \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUser enterpriseProxyGetEnterpriseProxyUser($body)

Get an enterprise proxy user

Get an enterprise proxy user by id or username.  Privileges required:  `READ` `PROXY_USER`  `READ` `PROXY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUser(); // \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUser | 

try {
    $result = $apiInstance->enterpriseProxyGetEnterpriseProxyUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseProxyGetEnterpriseProxyUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUser**](../Model/EnterpriseProxyGetEnterpriseProxyUser.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUser**](../Model/EnterpriseProxyGetEnterpriseProxyUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyGetEnterpriseProxyUsers**
> \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUsersResultItem[] enterpriseProxyGetEnterpriseProxyUsers($body)

Get all enterprise proxy admin users

undefined  Privileges required:  `READ` `ENTERPRISE`  `READ` `PROXY_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUsers(); // \Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUsers | 

try {
    $result = $apiInstance->enterpriseProxyGetEnterpriseProxyUsers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseProxyGetEnterpriseProxyUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUsers**](../Model/EnterpriseProxyGetEnterpriseProxyUsers.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyGetEnterpriseProxyUsersResultItem[]**](../Model/EnterpriseProxyGetEnterpriseProxyUsersResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyInsertEnterpriseProxyEnterprise**
> \Swagger\Client\Model\EnterpriseProxyInsertEnterpriseProxyEnterpriseResult enterpriseProxyInsertEnterpriseProxyEnterprise($body)

Insert a new enterprise owned by an MSP

Insert an enterprise owned by an MSP. Whereas the `insertEnterprise` method will create an enterprise in the global or network context with no MSP association, this method will create one owned by an MSP, as determined by the credentials of the caller.  Privileges required:  `CREATE` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyInsertEnterpriseProxyEnterprise(); // \Swagger\Client\Model\EnterpriseProxyInsertEnterpriseProxyEnterprise | 

try {
    $result = $apiInstance->enterpriseProxyInsertEnterpriseProxyEnterprise($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseProxyInsertEnterpriseProxyEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyInsertEnterpriseProxyEnterprise**](../Model/EnterpriseProxyInsertEnterpriseProxyEnterprise.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyInsertEnterpriseProxyEnterpriseResult**](../Model/EnterpriseProxyInsertEnterpriseProxyEnterpriseResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyInsertEnterpriseProxyUser**
> \Swagger\Client\Model\EnterpriseProxyInsertEnterpriseProxyUserResult enterpriseProxyInsertEnterpriseProxyUser($body)

Create a new partner admin user

Create a new partner admin user  Privileges required:  `CREATE` `PROXY_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NewEnterpriseProxyUser(); // \Swagger\Client\Model\NewEnterpriseProxyUser | 

try {
    $result = $apiInstance->enterpriseProxyInsertEnterpriseProxyUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseProxyInsertEnterpriseProxyUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewEnterpriseProxyUser**](../Model/NewEnterpriseProxyUser.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyInsertEnterpriseProxyUserResult**](../Model/EnterpriseProxyInsertEnterpriseProxyUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseProxyUpdateEnterpriseProxyUser**
> \Swagger\Client\Model\EnterpriseProxyUpdateEnterpriseProxyUserResult enterpriseProxyUpdateEnterpriseProxyUser($body)

Update an enterprise proxy admin user

Update an enterprise proxy admin user  Privileges required:  `UPDATE` `PROXY_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseProxyUpdateEnterpriseProxyUser(); // \Swagger\Client\Model\EnterpriseProxyUpdateEnterpriseProxyUser | 

try {
    $result = $apiInstance->enterpriseProxyUpdateEnterpriseProxyUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseProxyUpdateEnterpriseProxyUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseProxyUpdateEnterpriseProxyUser**](../Model/EnterpriseProxyUpdateEnterpriseProxyUser.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseProxyUpdateEnterpriseProxyUserResult**](../Model/EnterpriseProxyUpdateEnterpriseProxyUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseSetEnterpriseAllAlertRecipients**
> \Swagger\Client\Model\EnterpriseSetEnterpriseAllAlertRecipientsResult enterpriseSetEnterpriseAllAlertRecipients($body)

Set the recipients who should receive all alerts for an enterprise

Set the recipients who should receive all alerts for an enterprise.  Privileges required:  `UPDATE` `ENTERPRISE_ALERT`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseSetEnterpriseAllAlertRecipients(); // \Swagger\Client\Model\EnterpriseSetEnterpriseAllAlertRecipients | 

try {
    $result = $apiInstance->enterpriseSetEnterpriseAllAlertRecipients($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseSetEnterpriseAllAlertRecipients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseSetEnterpriseAllAlertRecipients**](../Model/EnterpriseSetEnterpriseAllAlertRecipients.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseSetEnterpriseAllAlertRecipientsResult**](../Model/EnterpriseSetEnterpriseAllAlertRecipientsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUpdateEnterprise**
> \Swagger\Client\Model\EnterpriseUpdateEnterpriseResult enterpriseUpdateEnterprise($body)

Update an enterprise

Update an enterprise provided an object id or name, and an _update object with the names and values of columns to be updated.  Privileges required:  `UPDATE` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterprise(); // \Swagger\Client\Model\EnterpriseUpdateEnterprise | 

try {
    $result = $apiInstance->enterpriseUpdateEnterprise($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseUpdateEnterprise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUpdateEnterprise**](../Model/EnterpriseUpdateEnterprise.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUpdateEnterpriseResult**](../Model/EnterpriseUpdateEnterpriseResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUpdateEnterpriseNetworkAllocation**
> \Swagger\Client\Model\EnterpriseUpdateEnterpriseNetworkAllocationResult enterpriseUpdateEnterpriseNetworkAllocation($body)

Update an enterprise network allocation

Update an enterprise network allocation, provided an object id and an _update object with the names and values of columns to be updated.  Privileges required:  `UPDATE` `NETWORK_ALLOCATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseNetworkAllocation(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseNetworkAllocation | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseNetworkAllocation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseUpdateEnterpriseNetworkAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUpdateEnterpriseNetworkAllocation**](../Model/EnterpriseUpdateEnterpriseNetworkAllocation.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUpdateEnterpriseNetworkAllocationResult**](../Model/EnterpriseUpdateEnterpriseNetworkAllocationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUpdateEnterpriseRoute**
> \Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteResult enterpriseUpdateEnterpriseRoute($body)

Update an enterprise route

Update an enterprise route, set advertisement and cost values. Required parameters include the original route, as returned by enterprise/getEnterpriseRouteTable and the updated route with modified advertisement and route preference ordering.  Privileges required:  `UPDATE` `ENTERPRISE_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseRoute(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseRoute | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseRoute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseUpdateEnterpriseRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUpdateEnterpriseRoute**](../Model/EnterpriseUpdateEnterpriseRoute.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteResult**](../Model/EnterpriseUpdateEnterpriseRouteResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUpdateEnterpriseRouteConfiguration**
> \Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteConfigurationResult enterpriseUpdateEnterpriseRouteConfiguration($body)

Update enterprise routing configuration

Update enterprise routing configuration, by configuration id or logicalId.  Privileges required:  `UPDATE` `ENTERPRISE_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteConfiguration(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteConfiguration | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseRouteConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseUpdateEnterpriseRouteConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteConfiguration**](../Model/EnterpriseUpdateEnterpriseRouteConfiguration.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUpdateEnterpriseRouteConfigurationResult**](../Model/EnterpriseUpdateEnterpriseRouteConfigurationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUpdateEnterpriseSecurityPolicy**
> \Swagger\Client\Model\EnterpriseUpdateEnterpriseSecurityPolicyResult enterpriseUpdateEnterpriseSecurityPolicy($body)

Update enterprise security policy

Update enterprise security policy in accordance with to the passed ipsec settings.  Privileges required:  `UPDATE` `ENTERPRISE_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseSecurityPolicy(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseSecurityPolicy | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseSecurityPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseUpdateEnterpriseSecurityPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUpdateEnterpriseSecurityPolicy**](../Model/EnterpriseUpdateEnterpriseSecurityPolicy.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUpdateEnterpriseSecurityPolicyResult**](../Model/EnterpriseUpdateEnterpriseSecurityPolicyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUpdateEnterpriseService**
> \Swagger\Client\Model\EnterpriseUpdateEnterpriseServiceResult enterpriseUpdateEnterpriseService($body)

Update an enterprise service

Update the enterprise service with the given id according to the settings specified by the _update field.  Privileges required:  `UPDATE` `NETWORK_SERVICE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUpdateEnterpriseService(); // \Swagger\Client\Model\EnterpriseUpdateEnterpriseService | 

try {
    $result = $apiInstance->enterpriseUpdateEnterpriseService($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseUpdateEnterpriseService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUpdateEnterpriseService**](../Model/EnterpriseUpdateEnterpriseService.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUpdateEnterpriseServiceResult**](../Model/EnterpriseUpdateEnterpriseServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUserDeleteEnterpriseUser**
> \Swagger\Client\Model\EnterpriseUserDeleteEnterpriseUserResult enterpriseUserDeleteEnterpriseUser($body)

Delete an enterprise user.

Delete an enterprise user by id or username. Note that `enterpriseId` is a required parameter when invoking this method as an operator or partner user.  Privileges required:  `DELETE` `ENTERPRISE_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUserDeleteEnterpriseUser(); // \Swagger\Client\Model\EnterpriseUserDeleteEnterpriseUser | 

try {
    $result = $apiInstance->enterpriseUserDeleteEnterpriseUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseUserDeleteEnterpriseUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUserDeleteEnterpriseUser**](../Model/EnterpriseUserDeleteEnterpriseUser.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUserDeleteEnterpriseUserResult**](../Model/EnterpriseUserDeleteEnterpriseUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUserGetEnterpriseUser**
> \Swagger\Client\Model\EnterpriseUserGetEnterpriseUserResult enterpriseUserGetEnterpriseUser($body)

Get an enterprise user

Get an enterprise user by id or username.  Privileges required:  `READ` `ENTERPRISE_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUserGetEnterpriseUser(); // \Swagger\Client\Model\EnterpriseUserGetEnterpriseUser | 

try {
    $result = $apiInstance->enterpriseUserGetEnterpriseUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseUserGetEnterpriseUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUserGetEnterpriseUser**](../Model/EnterpriseUserGetEnterpriseUser.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUserGetEnterpriseUserResult**](../Model/EnterpriseUserGetEnterpriseUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseUserUpdateEnterpriseUser**
> \Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUserResult enterpriseUserUpdateEnterpriseUser($body)

Update an enterprise user

Update an enterprise user provided an object `id` or other identifying attributes, and an `_update` object with the names and values of columns to be updated.  Privileges required:  `UPDATE` `ENTERPRISE_USER`, or  `UPDATE` `OPERATOR_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUser(); // \Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUser | 

try {
    $result = $apiInstance->enterpriseUserUpdateEnterpriseUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->enterpriseUserUpdateEnterpriseUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUser**](../Model/EnterpriseUserUpdateEnterpriseUser.md)|  |

### Return type

[**\Swagger\Client\Model\EnterpriseUserUpdateEnterpriseUserResult**](../Model/EnterpriseUserUpdateEnterpriseUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventGetEnterpriseEvents**
> \Swagger\Client\Model\EventGetEnterpriseEventsResult eventGetEnterpriseEvents($body)

Fetch edge events

Fetch edge events in an enterprise or edge context, returns an array of filters and sorted edge events.  Privileges required:  `READ` `ENTERPRISE_EVENT`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EventGetEnterpriseEvents(); // \Swagger\Client\Model\EventGetEnterpriseEvents | 

try {
    $result = $apiInstance->eventGetEnterpriseEvents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->eventGetEnterpriseEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EventGetEnterpriseEvents**](../Model/EventGetEnterpriseEvents.md)|  |

### Return type

[**\Swagger\Client\Model\EventGetEnterpriseEventsResult**](../Model/EventGetEnterpriseEventsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventGetOperatorEvents**
> \Swagger\Client\Model\EventGetOperatorEventsResult eventGetOperatorEvents($body)

Fetch operator events

Fetch Operator Events by network ID (optional, if not specified will be taken for the callers security context). Optionally, a filter object can be used to limit the number of events returned. Additionally, a time interval can be specified with an interval object. If no end date is given, it will default to the current date. Gateway ID can be supplied to filter events to those from a specific gateway.  Privileges required:  `READ` `OPERATOR_EVENT`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EventGetOperatorEvents(); // \Swagger\Client\Model\EventGetOperatorEvents | 

try {
    $result = $apiInstance->eventGetOperatorEvents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->eventGetOperatorEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EventGetOperatorEvents**](../Model/EventGetOperatorEvents.md)|  |

### Return type

[**\Swagger\Client\Model\EventGetOperatorEventsResult**](../Model/EventGetOperatorEventsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **firewallGetEnterpriseFirewallLogs**
> \Swagger\Client\Model\FirewallGetEnterpriseFirewallLogsResult firewallGetEnterpriseFirewallLogs($body)

Get enterprise firewall logs

Retrieve enterprise firewall logs.  Privileges required:  `READ` `EDGE`  `VIEW_FIREWALL_LOGS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FirewallGetEnterpriseFirewallLogs(); // \Swagger\Client\Model\FirewallGetEnterpriseFirewallLogs | 

try {
    $result = $apiInstance->firewallGetEnterpriseFirewallLogs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->firewallGetEnterpriseFirewallLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FirewallGetEnterpriseFirewallLogs**](../Model/FirewallGetEnterpriseFirewallLogs.md)|  |

### Return type

[**\Swagger\Client\Model\FirewallGetEnterpriseFirewallLogsResult**](../Model/FirewallGetEnterpriseFirewallLogsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gatewayDeleteGateway**
> \Swagger\Client\Model\GatewayDeleteGatewayResult gatewayDeleteGateway($body)

Delete a gateway

Delete a gateway by id.  Privileges required:  `DELETE` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GatewayDeleteGateway(); // \Swagger\Client\Model\GatewayDeleteGateway | 

try {
    $result = $apiInstance->gatewayDeleteGateway($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->gatewayDeleteGateway: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GatewayDeleteGateway**](../Model/GatewayDeleteGateway.md)|  |

### Return type

[**\Swagger\Client\Model\GatewayDeleteGatewayResult**](../Model/GatewayDeleteGatewayResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gatewayGatewayProvision**
> \Swagger\Client\Model\GatewayGatewayProvisionResult gatewayGatewayProvision($body)

Provision a gateway

Provision a gateway into an operator network.  Privileges required:  `CREATE` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GatewayGatewayProvision(); // \Swagger\Client\Model\GatewayGatewayProvision | 

try {
    $result = $apiInstance->gatewayGatewayProvision($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->gatewayGatewayProvision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GatewayGatewayProvision**](../Model/GatewayGatewayProvision.md)|  |

### Return type

[**\Swagger\Client\Model\GatewayGatewayProvisionResult**](../Model/GatewayGatewayProvisionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gatewayUpdateGatewayAttributes**
> \Swagger\Client\Model\GatewayUpdateGatewayAttributesResult gatewayUpdateGatewayAttributes($body)

Update gateway attributes

Update gateway attributes (name, ipAddress, on-premise parametrization and description) and associated site attributes  Privileges required:  `UPDATE` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GatewayUpdateGatewayAttributes(); // \Swagger\Client\Model\GatewayUpdateGatewayAttributes | 

try {
    $result = $apiInstance->gatewayUpdateGatewayAttributes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->gatewayUpdateGatewayAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GatewayUpdateGatewayAttributes**](../Model/GatewayUpdateGatewayAttributes.md)|  |

### Return type

[**\Swagger\Client\Model\GatewayUpdateGatewayAttributesResult**](../Model/GatewayUpdateGatewayAttributesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkQualityEventGetLinkQualityEvents**
> \Swagger\Client\Model\LinkQualityEventGetLinkQualityEventsResult linkQualityEventGetLinkQualityEvents($body)

Get link quality data

Returns link quality scores per link for a particular edge within a time interval. Rolls up link quality events to provide an aggregate score for the edge. Returns an empty array if no link quality events are available in the given timeframe.  Privileges required:  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LinkQualityEventGetLinkQualityEvents(); // \Swagger\Client\Model\LinkQualityEventGetLinkQualityEvents | 

try {
    $result = $apiInstance->linkQualityEventGetLinkQualityEvents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->linkQualityEventGetLinkQualityEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LinkQualityEventGetLinkQualityEvents**](../Model/LinkQualityEventGetLinkQualityEvents.md)|  |

### Return type

[**\Swagger\Client\Model\LinkQualityEventGetLinkQualityEventsResult**](../Model/LinkQualityEventGetLinkQualityEventsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginEnterpriseLogin**
> loginEnterpriseLogin($authorization)

Authentication for non-operator users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = new \Swagger\Client\Model\AuthObject(); // \Swagger\Client\Model\AuthObject | 

try {
    $apiInstance->loginEnterpriseLogin($authorization);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->loginEnterpriseLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | [**\Swagger\Client\Model\AuthObject**](../Model/AuthObject.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginOperatorLogin**
> loginOperatorLogin($authorization)

Authentication for an operator user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = new \Swagger\Client\Model\AuthObject(); // \Swagger\Client\Model\AuthObject | 

try {
    $apiInstance->loginOperatorLogin($authorization);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->loginOperatorLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | [**\Swagger\Client\Model\AuthObject**](../Model/AuthObject.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logout**
> logout()

Deactivate a given authorization cookie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->logout();
} catch (Exception $e) {
    echo 'Exception when calling AllApi->logout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meta**
> \Swagger\Client\Model\InlineResponse200 meta($api_path)

Get meta-data on any other API call

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_path = "api_path_example"; // string | the path to another api method, starting after /rest/

try {
    $result = $apiInstance->meta($api_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->meta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_path** | **string**| the path to another api method, starting after /rest/ |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeAppLinkMetrics**
> \Swagger\Client\Model\MetricsGetEdgeAppLinkMetricsResultItem[] metricsGetEdgeAppLinkMetrics($body)

Get flow metric aggregate data by link

Fetch flow metric summaries for the given time interval by link. On success, this method returns an array of flow data where each entry corresponds to a link on the given edge. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeAppLinkMetrics(); // \Swagger\Client\Model\MetricsGetEdgeAppLinkMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeAppLinkMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeAppLinkMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeAppLinkMetrics**](../Model/MetricsGetEdgeAppLinkMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeAppLinkMetricsResultItem[]**](../Model/MetricsGetEdgeAppLinkMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeAppLinkSeries**
> \Swagger\Client\Model\MetricsGetEdgeAppLinkSeriesResultItem[] metricsGetEdgeAppLinkSeries($body)

Get flow metric time series data by link

Fetch flow metric time series for the given time interval by link. On success, this method returns an array of flow data where each entry corresponds to a link on the given edge. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeAppLinkSeries(); // \Swagger\Client\Model\MetricsGetEdgeAppLinkSeries | 

try {
    $result = $apiInstance->metricsGetEdgeAppLinkSeries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeAppLinkSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeAppLinkSeries**](../Model/MetricsGetEdgeAppLinkSeries.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeAppLinkSeriesResultItem[]**](../Model/MetricsGetEdgeAppLinkSeriesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeAppMetrics**
> \Swagger\Client\Model\MetricsGetEdgeAppMetricsResultItem[] metricsGetEdgeAppMetrics($body)

Get flow metric aggregate data by application

Fetch flow metric summaries for the given time interval by application. On success, this method returns an array of flow data where each entry corresponds to a single application. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeAppMetrics(); // \Swagger\Client\Model\MetricsGetEdgeAppMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeAppMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeAppMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeAppMetrics**](../Model/MetricsGetEdgeAppMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeAppMetricsResultItem[]**](../Model/MetricsGetEdgeAppMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeAppSeries**
> \Swagger\Client\Model\MetricsGetEdgeAppSeriesResultItem[] metricsGetEdgeAppSeries($body)

Get flow metric time series data by application

Fetch flow metric time series for the given time interval by application. On success, this method returns an array of flow data where each entry corresponds to a single application. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeAppSeries(); // \Swagger\Client\Model\MetricsGetEdgeAppSeries | 

try {
    $result = $apiInstance->metricsGetEdgeAppSeries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeAppSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeAppSeries**](../Model/MetricsGetEdgeAppSeries.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeAppSeriesResultItem[]**](../Model/MetricsGetEdgeAppSeriesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeCategoryMetrics**
> \Swagger\Client\Model\MetricsGetEdgeCategoryMetricsResultItem[] metricsGetEdgeCategoryMetrics($body)

Get flow metric aggregate data by application category

Fetch flow metric summaries for the given time interval by application category. On success, this method returns an array of flow data where each entry corresponds to a category of application traffic that has traversed the given edge. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeCategoryMetrics(); // \Swagger\Client\Model\MetricsGetEdgeCategoryMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeCategoryMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeCategoryMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeCategoryMetrics**](../Model/MetricsGetEdgeCategoryMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeCategoryMetricsResultItem[]**](../Model/MetricsGetEdgeCategoryMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeCategorySeries**
> \Swagger\Client\Model\MetricsGetEdgeCategorySeriesResultItem[] metricsGetEdgeCategorySeries($body)

Get flow metric time series data by application category

Fetch flow metric time series for the given time interval by application category. On success, this method returns an array of flow data where each entry corresponds to a category of application traffic that has traversed the given edge. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeCategorySeries(); // \Swagger\Client\Model\MetricsGetEdgeCategorySeries | 

try {
    $result = $apiInstance->metricsGetEdgeCategorySeries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeCategorySeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeCategorySeries**](../Model/MetricsGetEdgeCategorySeries.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeCategorySeriesResultItem[]**](../Model/MetricsGetEdgeCategorySeriesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeDestMetrics**
> \Swagger\Client\Model\MetricsGetEdgeDestMetricsResultItem[] metricsGetEdgeDestMetrics($body)

Get flow metric aggregate data by destination

Fetch flow metric summaries for the given time interval by destination. On success, this method returns an array of flow data where each entry corresponds to a distinct traffic destination. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeDestMetrics(); // \Swagger\Client\Model\MetricsGetEdgeDestMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeDestMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeDestMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeDestMetrics**](../Model/MetricsGetEdgeDestMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeDestMetricsResultItem[]**](../Model/MetricsGetEdgeDestMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeDestSeries**
> \Swagger\Client\Model\MetricsGetEdgeDestSeriesResultItem[] metricsGetEdgeDestSeries($body)

Get flow metric time series data by destination

Fetch flow metric time series for the given time interval by destination. On success, this method returns an array of flow data where each entry corresponds to a distinct traffic destination. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeDestSeries(); // \Swagger\Client\Model\MetricsGetEdgeDestSeries | 

try {
    $result = $apiInstance->metricsGetEdgeDestSeries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeDestSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeDestSeries**](../Model/MetricsGetEdgeDestSeries.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeDestSeriesResultItem[]**](../Model/MetricsGetEdgeDestSeriesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeDeviceMetrics**
> \Swagger\Client\Model\MetricsGetEdgeDeviceMetricsResultItem[] metricsGetEdgeDeviceMetrics($body)

Get flow metric aggregate data by client device

Fetch flow metric summaries for the given time interval by client device. On success, this method returns an array of flow data where each entry corresponds to a distinct device. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_USER_IDENTIFIABLE_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeDeviceMetrics(); // \Swagger\Client\Model\MetricsGetEdgeDeviceMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeDeviceMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeDeviceMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeDeviceMetrics**](../Model/MetricsGetEdgeDeviceMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeDeviceMetricsResultItem[]**](../Model/MetricsGetEdgeDeviceMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeDeviceSeries**
> \Swagger\Client\Model\MetricsGetEdgeDeviceSeriesResultItem[] metricsGetEdgeDeviceSeries($body)

Get flow metric time series data by client device

Fetch flow metric time series for the given time interval by client device. On success, this method returns an array of flow data where each entry corresponds to a distinct device. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_USER_IDENTIFIABLE_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeDeviceSeries(); // \Swagger\Client\Model\MetricsGetEdgeDeviceSeries | 

try {
    $result = $apiInstance->metricsGetEdgeDeviceSeries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeDeviceSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeDeviceSeries**](../Model/MetricsGetEdgeDeviceSeries.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeDeviceSeriesResultItem[]**](../Model/MetricsGetEdgeDeviceSeriesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeLinkMetrics**
> \Swagger\Client\Model\MetricsGetEdgeLinkMetricsResultItem[] metricsGetEdgeLinkMetrics($body)

Get advanced flow metric aggregate data by link

Fetch advanced flow metric summaries for the given time interval by link. On success, this method returns an array of flow data where each entry corresponds to a link on the given edge. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeLinkMetrics(); // \Swagger\Client\Model\MetricsGetEdgeLinkMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeLinkMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeLinkMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeLinkMetrics**](../Model/MetricsGetEdgeLinkMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeLinkMetricsResultItem[]**](../Model/MetricsGetEdgeLinkMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeLinkSeries**
> \Swagger\Client\Model\MetricsGetEdgeLinkSeriesResultItem[] metricsGetEdgeLinkSeries($body)

Get advanced flow metric time series data by link

Fetch advanced flow metric time series for the given time interval by link. On success, this method returns an array of flow data where each entry corresponds to a link on the given edge. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeLinkSeries(); // \Swagger\Client\Model\MetricsGetEdgeLinkSeries | 

try {
    $result = $apiInstance->metricsGetEdgeLinkSeries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeLinkSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeLinkSeries**](../Model/MetricsGetEdgeLinkSeries.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeLinkSeriesResultItem[]**](../Model/MetricsGetEdgeLinkSeriesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeOsMetrics**
> \Swagger\Client\Model\MetricsGetEdgeOsMetricsResultItem[] metricsGetEdgeOsMetrics($body)

Get flow metric aggregate data by client OS

Fetch flow metric summaries for the given time interval by client OS. On success, this method returns an array of flow data where each entry corresponds to a distinct OS on a client device. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeOsMetrics(); // \Swagger\Client\Model\MetricsGetEdgeOsMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeOsMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeOsMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeOsMetrics**](../Model/MetricsGetEdgeOsMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeOsMetricsResultItem[]**](../Model/MetricsGetEdgeOsMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeOsSeries**
> \Swagger\Client\Model\MetricsGetEdgeOsSeriesResultItem[] metricsGetEdgeOsSeries($body)

Get flow metric time series data by client OS

Fetch flow metric time series for the given time interval by client OS. On success, this method returns an array of flow data where each entry corresponds to a distinct OS on a client device. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeOsSeries(); // \Swagger\Client\Model\MetricsGetEdgeOsSeries | 

try {
    $result = $apiInstance->metricsGetEdgeOsSeries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeOsSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeOsSeries**](../Model/MetricsGetEdgeOsSeries.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeOsSeriesResultItem[]**](../Model/MetricsGetEdgeOsSeriesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeSegmentMetrics**
> \Swagger\Client\Model\MetricsGetEdgeSegmentMetricsResultItem[] metricsGetEdgeSegmentMetrics($body)

Get flow metric aggregate data by segment Id

Fetch flow metric summaries for the given time interval by segment id. On success, this method returns an array of flow data where each entry corresponds to a segment id traffic that has traversed the given edge. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeSegmentMetrics(); // \Swagger\Client\Model\MetricsGetEdgeSegmentMetrics | 

try {
    $result = $apiInstance->metricsGetEdgeSegmentMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeSegmentMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeSegmentMetrics**](../Model/MetricsGetEdgeSegmentMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeSegmentMetricsResultItem[]**](../Model/MetricsGetEdgeSegmentMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **metricsGetEdgeSegmentSeries**
> \Swagger\Client\Model\MetricsGetEdgeSegmentSeriesResultItem[] metricsGetEdgeSegmentSeries($body)

Get flow metric time series data by segment id

Fetch flow metric time series for the given time interval by segment id. On success, this method returns an array of flow data where each entry corresponds to a segment id of traffic that has traversed the given edge. In the request body, the `id` and `edgeId` property names are interchangeable. The `enterpriseId` property is required when this method is invoked in the operator context.  Privileges required:  `READ` `EDGE`  `VIEW_FLOW_STATS` `undefined`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MetricsGetEdgeSegmentSeries(); // \Swagger\Client\Model\MetricsGetEdgeSegmentSeries | 

try {
    $result = $apiInstance->metricsGetEdgeSegmentSeries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->metricsGetEdgeSegmentSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MetricsGetEdgeSegmentSeries**](../Model/MetricsGetEdgeSegmentSeries.md)|  |

### Return type

[**\Swagger\Client\Model\MetricsGetEdgeSegmentSeriesResultItem[]**](../Model/MetricsGetEdgeSegmentSeriesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoringGetAggregateEdgeLinkMetrics**
> \Swagger\Client\Model\MonitoringGetAggregateEdgeLinkMetricsResultItem[] monitoringGetAggregateEdgeLinkMetrics($body)

Get aggregated edge link metrics across enterprises

Get aggregate edge link metrics across enterprises. On success, returns an array of network utilization metrics, one per link.  Privileges required:  `READ` `ENTERPRISE`  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MonitoringGetAggregateEdgeLinkMetrics(); // \Swagger\Client\Model\MonitoringGetAggregateEdgeLinkMetrics | 

try {
    $result = $apiInstance->monitoringGetAggregateEdgeLinkMetrics($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->monitoringGetAggregateEdgeLinkMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MonitoringGetAggregateEdgeLinkMetrics**](../Model/MonitoringGetAggregateEdgeLinkMetrics.md)|  |

### Return type

[**\Swagger\Client\Model\MonitoringGetAggregateEdgeLinkMetricsResultItem[]**](../Model/MonitoringGetAggregateEdgeLinkMetricsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoringGetAggregateEnterpriseEvents**
> \Swagger\Client\Model\MonitoringGetAggregateEnterpriseEventsResult monitoringGetAggregateEnterpriseEvents($body)

Fetch all enterprise events

Fetch all events across all enterprises in a paginated list. When called in the MSP/Partner context, only enterprises managed by the MSP are queried.  Privileges required:  `READ` `ENTERPRISE`  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MonitoringGetAggregateEnterpriseEvents(); // \Swagger\Client\Model\MonitoringGetAggregateEnterpriseEvents | 

try {
    $result = $apiInstance->monitoringGetAggregateEnterpriseEvents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->monitoringGetAggregateEnterpriseEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MonitoringGetAggregateEnterpriseEvents**](../Model/MonitoringGetAggregateEnterpriseEvents.md)|  |

### Return type

[**\Swagger\Client\Model\MonitoringGetAggregateEnterpriseEventsResult**](../Model/MonitoringGetAggregateEnterpriseEventsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoringGetAggregates**
> \Swagger\Client\Model\MonitoringGetAggregatesResult monitoringGetAggregates($body)

Get aggregate enterprise and edge information

Retrieve a comprehensive listing of all enterprises and edges on a network. Returns an object containing an aggregate `edgeCount`, a list (`enterprises`) containing enterprise objects, and a map (`edges`) which gives edge counts per enterprise.  Privileges required:  `READ` `ENTERPRISE`  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MonitoringGetAggregates(); // \Swagger\Client\Model\MonitoringGetAggregates | 

try {
    $result = $apiInstance->monitoringGetAggregates($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->monitoringGetAggregates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MonitoringGetAggregates**](../Model/MonitoringGetAggregates.md)|  |

### Return type

[**\Swagger\Client\Model\MonitoringGetAggregatesResult**](../Model/MonitoringGetAggregatesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoringGetEnterpriseBgpPeerStatus**
> \Swagger\Client\Model\MonitoringGetEnterpriseBgpPeerStatusResultItem[] monitoringGetEnterpriseBgpPeerStatus($body)

Get gateway BGP peer status for all enterprise gateways

Returns an array where each entry corresponds to a gateway and contains an associated set of BGP peers with state records.  Privileges required:  `READ` `NETWORK_SERVICE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $result = $apiInstance->monitoringGetEnterpriseBgpPeerStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->monitoringGetEnterpriseBgpPeerStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body**](../Model/Body.md)|  |

### Return type

[**\Swagger\Client\Model\MonitoringGetEnterpriseBgpPeerStatusResultItem[]**](../Model/MonitoringGetEnterpriseBgpPeerStatusResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoringGetEnterpriseEdgeBgpPeerStatus**
> \Swagger\Client\Model\MonitoringGetEnterpriseEdgeBgpPeerStatusResultItem[] monitoringGetEnterpriseEdgeBgpPeerStatus($body)

Get edge BGP peer status for all enterprise edges

Returns an array where each entry corresponds to an edge and contains an associated set of BGP peers and state records.  Privileges required:  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | 

try {
    $result = $apiInstance->monitoringGetEnterpriseEdgeBgpPeerStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->monitoringGetEnterpriseEdgeBgpPeerStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body1**](../Model/Body1.md)|  |

### Return type

[**\Swagger\Client\Model\MonitoringGetEnterpriseEdgeBgpPeerStatusResultItem[]**](../Model/MonitoringGetEnterpriseEdgeBgpPeerStatusResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoringGetEnterpriseEdgeLinkStatus**
> \Swagger\Client\Model\MonitoringGetEnterpriseEdgeLinkStatusResultItem[] monitoringGetEnterpriseEdgeLinkStatus($body)

Get edge and link status data

Get current edge and edge-link status for all enterprise edges.  Privileges required:  `READ` `ENTERPRISE`  `READ` `EDGE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body2(); // \Swagger\Client\Model\Body2 | 

try {
    $result = $apiInstance->monitoringGetEnterpriseEdgeLinkStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->monitoringGetEnterpriseEdgeLinkStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body2**](../Model/Body2.md)|  |

### Return type

[**\Swagger\Client\Model\MonitoringGetEnterpriseEdgeLinkStatusResultItem[]**](../Model/MonitoringGetEnterpriseEdgeLinkStatusResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkDeleteNetworkGatewayPool**
> \Swagger\Client\Model\NetworkDeleteNetworkGatewayPoolResult networkDeleteNetworkGatewayPool($body)

Delete a gateway pool

Delete a gateway pool, and it's component gateways, by pool id.  Privileges required:  `DELETE` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkDeleteNetworkGatewayPool(); // \Swagger\Client\Model\NetworkDeleteNetworkGatewayPool | 

try {
    $result = $apiInstance->networkDeleteNetworkGatewayPool($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->networkDeleteNetworkGatewayPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkDeleteNetworkGatewayPool**](../Model/NetworkDeleteNetworkGatewayPool.md)|  |

### Return type

[**\Swagger\Client\Model\NetworkDeleteNetworkGatewayPoolResult**](../Model/NetworkDeleteNetworkGatewayPoolResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkGetNetworkConfigurations**
> \Swagger\Client\Model\NetworkGetNetworkConfigurationsResultItem[] networkGetNetworkConfigurations($body)

Get operator configuration profiles

Get the configuration profiles associated with an operator's network, optionally including the modules associated with each profile. Templates are not returned from this call.  Privileges required:  `READ` `OPERATOR_PROFILE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkGetNetworkConfigurations(); // \Swagger\Client\Model\NetworkGetNetworkConfigurations | 

try {
    $result = $apiInstance->networkGetNetworkConfigurations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->networkGetNetworkConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkGetNetworkConfigurations**](../Model/NetworkGetNetworkConfigurations.md)|  |

### Return type

[**\Swagger\Client\Model\NetworkGetNetworkConfigurationsResultItem[]**](../Model/NetworkGetNetworkConfigurationsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkGetNetworkEnterprises**
> \Swagger\Client\Model\NetworkGetNetworkEnterprisesResultItem[] networkGetNetworkEnterprises($body)

Get a list of the enterprises on a network

Get the enterprises existing on a network, optionally including all edges or edge counts. The `edgeConfigUpdate` \"with\" option may also be passed to check whether application of configuration updates to edges is enabled for each enterprise.  Privileges required:  `READ` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkGetNetworkEnterprises(); // \Swagger\Client\Model\NetworkGetNetworkEnterprises | 

try {
    $result = $apiInstance->networkGetNetworkEnterprises($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->networkGetNetworkEnterprises: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkGetNetworkEnterprises**](../Model/NetworkGetNetworkEnterprises.md)|  |

### Return type

[**\Swagger\Client\Model\NetworkGetNetworkEnterprisesResultItem[]**](../Model/NetworkGetNetworkEnterprisesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkGetNetworkGatewayPools**
> \Swagger\Client\Model\NetworkGetNetworkGatewayPoolsResultItem[] networkGetNetworkGatewayPools($body)

Get list of gateway pools

Get list of gateway pools associated with a network, optionally with the gateways or enterprises belonging to each pool.  Privileges required:  `READ` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkGetNetworkGatewayPools(); // \Swagger\Client\Model\NetworkGetNetworkGatewayPools | 

try {
    $result = $apiInstance->networkGetNetworkGatewayPools($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->networkGetNetworkGatewayPools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkGetNetworkGatewayPools**](../Model/NetworkGetNetworkGatewayPools.md)|  |

### Return type

[**\Swagger\Client\Model\NetworkGetNetworkGatewayPoolsResultItem[]**](../Model/NetworkGetNetworkGatewayPoolsResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkGetNetworkGateways**
> \Swagger\Client\Model\NetworkGetNetworkGatewaysResultItem[] networkGetNetworkGateways($body)

Get list of gateways

Get list of gateways associated with a network.  Privileges required:  `READ` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkGetNetworkGateways(); // \Swagger\Client\Model\NetworkGetNetworkGateways | 

try {
    $result = $apiInstance->networkGetNetworkGateways($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->networkGetNetworkGateways: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkGetNetworkGateways**](../Model/NetworkGetNetworkGateways.md)|  |

### Return type

[**\Swagger\Client\Model\NetworkGetNetworkGatewaysResultItem[]**](../Model/NetworkGetNetworkGatewaysResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkGetNetworkOperatorUsers**
> \Swagger\Client\Model\NetworkGetNetworkOperatorUsersResultItem[] networkGetNetworkOperatorUsers($body)

Get list of operator users for a network

Get a list of all of the operator users associated with a network  Privileges required:  `READ` `OPERATOR_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkGetNetworkOperatorUsers(); // \Swagger\Client\Model\NetworkGetNetworkOperatorUsers | 

try {
    $result = $apiInstance->networkGetNetworkOperatorUsers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->networkGetNetworkOperatorUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkGetNetworkOperatorUsers**](../Model/NetworkGetNetworkOperatorUsers.md)|  |

### Return type

[**\Swagger\Client\Model\NetworkGetNetworkOperatorUsersResultItem[]**](../Model/NetworkGetNetworkOperatorUsersResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkInsertNetworkGatewayPool**
> \Swagger\Client\Model\NetworkInsertNetworkGatewayPoolResult networkInsertNetworkGatewayPool($body)

Insert a gateway pool

Insert a gateway pool, associated with a network.  Privileges required:  `CREATE` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkInsertNetworkGatewayPool(); // \Swagger\Client\Model\NetworkInsertNetworkGatewayPool | 

try {
    $result = $apiInstance->networkInsertNetworkGatewayPool($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->networkInsertNetworkGatewayPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkInsertNetworkGatewayPool**](../Model/NetworkInsertNetworkGatewayPool.md)|  |

### Return type

[**\Swagger\Client\Model\NetworkInsertNetworkGatewayPoolResult**](../Model/NetworkInsertNetworkGatewayPoolResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkUpdateNetworkGatewayPoolAttributes**
> \Swagger\Client\Model\NetworkUpdateNetworkGatewayPoolAttributesResult networkUpdateNetworkGatewayPoolAttributes($body)

Update gateway pool attributes

Update the configurable attributes of a Gateway Pool. Configurarable attributes are `name`, `description`, and `handOffType`.  Privileges required:  `UPDATE` `GATEWAY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworkUpdateNetworkGatewayPoolAttributes(); // \Swagger\Client\Model\NetworkUpdateNetworkGatewayPoolAttributes | 

try {
    $result = $apiInstance->networkUpdateNetworkGatewayPoolAttributes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->networkUpdateNetworkGatewayPoolAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworkUpdateNetworkGatewayPoolAttributes**](../Model/NetworkUpdateNetworkGatewayPoolAttributes.md)|  |

### Return type

[**\Swagger\Client\Model\NetworkUpdateNetworkGatewayPoolAttributesResult**](../Model/NetworkUpdateNetworkGatewayPoolAttributesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatorUserDeleteOperatorUser**
> \Swagger\Client\Model\OperatorUserDeleteOperatorUserResult operatorUserDeleteOperatorUser($body)

Delete an operator user

Delete an operator user object by `id` or `username`.  Privileges required:  `DELETE` `OPERATOR_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OperatorUserDeleteOperatorUser(); // \Swagger\Client\Model\OperatorUserDeleteOperatorUser | 

try {
    $result = $apiInstance->operatorUserDeleteOperatorUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->operatorUserDeleteOperatorUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OperatorUserDeleteOperatorUser**](../Model/OperatorUserDeleteOperatorUser.md)|  |

### Return type

[**\Swagger\Client\Model\OperatorUserDeleteOperatorUserResult**](../Model/OperatorUserDeleteOperatorUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatorUserGetOperatorUser**
> \Swagger\Client\Model\OperatorUserGetOperatorUserResult operatorUserGetOperatorUser($body)

Get an operator user

Get an operator user object by `id` or `username`.  Privileges required:  `READ` `OPERATOR_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OperatorUserGetOperatorUser(); // \Swagger\Client\Model\OperatorUserGetOperatorUser | 

try {
    $result = $apiInstance->operatorUserGetOperatorUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->operatorUserGetOperatorUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OperatorUserGetOperatorUser**](../Model/OperatorUserGetOperatorUser.md)|  |

### Return type

[**\Swagger\Client\Model\OperatorUserGetOperatorUserResult**](../Model/OperatorUserGetOperatorUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatorUserInsertOperatorUser**
> \Swagger\Client\Model\OperatorUserGetOperatorUserResult operatorUserInsertOperatorUser($body)

Insert an operator user

Insert an operator user and associate with an operator's network.  Privileges required:  `CREATE` `OPERATOR_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OperatorUserInsertOperatorUser(); // \Swagger\Client\Model\OperatorUserInsertOperatorUser | 

try {
    $result = $apiInstance->operatorUserInsertOperatorUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->operatorUserInsertOperatorUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OperatorUserInsertOperatorUser**](../Model/OperatorUserInsertOperatorUser.md)|  |

### Return type

[**\Swagger\Client\Model\OperatorUserGetOperatorUserResult**](../Model/OperatorUserGetOperatorUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operatorUserUpdateOperatorUser**
> \Swagger\Client\Model\OperatorUserUpdateOperatorUserResult operatorUserUpdateOperatorUser($body)

Update an operator user

Update an operator user provided an object `id` or `username`, and an `_update` object containing the names and values, of columns to be updated.  Privileges required:  `UPDATE` `OPERATOR_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OperatorUserUpdateOperatorUser(); // \Swagger\Client\Model\OperatorUserUpdateOperatorUser | 

try {
    $result = $apiInstance->operatorUserUpdateOperatorUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->operatorUserUpdateOperatorUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OperatorUserUpdateOperatorUser**](../Model/OperatorUserUpdateOperatorUser.md)|  |

### Return type

[**\Swagger\Client\Model\OperatorUserUpdateOperatorUserResult**](../Model/OperatorUserUpdateOperatorUserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleCreateRoleCustomization**
> \Swagger\Client\Model\RoleCreateRoleCustomizationResult roleCreateRoleCustomization($body)

Create a role customization

Create a role customization given a roleId and an array of privilegeIds.  Privileges required:  `UPDATE` `NETWORK`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RoleCreateRoleCustomization(); // \Swagger\Client\Model\RoleCreateRoleCustomization | 

try {
    $result = $apiInstance->roleCreateRoleCustomization($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->roleCreateRoleCustomization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RoleCreateRoleCustomization**](../Model/RoleCreateRoleCustomization.md)|  |

### Return type

[**\Swagger\Client\Model\RoleCreateRoleCustomizationResult**](../Model/RoleCreateRoleCustomizationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleDeleteRoleCustomization**
> \Swagger\Client\Model\RoleDeleteRoleCustomizationResult roleDeleteRoleCustomization($body)

Delete a role customization

Delete a role customization, given a role customization name or forRoleId.  Privileges required:  `UPDATE` `NETWORK`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RoleDeleteRoleCustomization(); // \Swagger\Client\Model\RoleDeleteRoleCustomization | 

try {
    $result = $apiInstance->roleDeleteRoleCustomization($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->roleDeleteRoleCustomization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RoleDeleteRoleCustomization**](../Model/RoleDeleteRoleCustomization.md)|  |

### Return type

[**\Swagger\Client\Model\RoleDeleteRoleCustomizationResult**](../Model/RoleDeleteRoleCustomizationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleGetUserTypeRoles**
> \Swagger\Client\Model\RoleGetUserTypeRolesResultItem[] roleGetUserTypeRoles($body)

Get the roles defined for a user type

Return the defined roles for a specified user type.  Privileges required:  `READ` `ENTERPRISE_USER`, or  `READ` `PROXY_USER`, or  `READ` `OPERATOR_USER`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RoleGetUserTypeRoles(); // \Swagger\Client\Model\RoleGetUserTypeRoles | 

try {
    $result = $apiInstance->roleGetUserTypeRoles($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->roleGetUserTypeRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RoleGetUserTypeRoles**](../Model/RoleGetUserTypeRoles.md)|  |

### Return type

[**\Swagger\Client\Model\RoleGetUserTypeRolesResultItem[]**](../Model/RoleGetUserTypeRolesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSetEnterpriseDelegatedToEnterpriseProxy**
> \Swagger\Client\Model\RoleSetEnterpriseDelegatedToEnterpriseProxyResult roleSetEnterpriseDelegatedToEnterpriseProxy($body)

Grant enterprise access to an enterprise proxy

When an enterprise is delegated to a proxy, proxy users are granted access to view, configure and troubleshoot edges owned by the enterprise. As a security consideration, proxy Support users cannot view personally identifiable information.  Privileges required:  `UPDATE` `ENTERPRISE_DELEGATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body3(); // \Swagger\Client\Model\Body3 | 

try {
    $result = $apiInstance->roleSetEnterpriseDelegatedToEnterpriseProxy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->roleSetEnterpriseDelegatedToEnterpriseProxy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body3**](../Model/Body3.md)|  |

### Return type

[**\Swagger\Client\Model\RoleSetEnterpriseDelegatedToEnterpriseProxyResult**](../Model/RoleSetEnterpriseDelegatedToEnterpriseProxyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSetEnterpriseDelegatedToOperator**
> \Swagger\Client\Model\RoleSetEnterpriseDelegatedToOperatorResult roleSetEnterpriseDelegatedToOperator($body)

Grant enterprise access to the network operator

When an enterprise is delegated to the operator, operator users are permitted to view, configure and troubleshoot edges owned by the enterprise. As a security consideration, operator users cannot view personally identifiable information.  Privileges required:  `UPDATE` `ENTERPRISE_DELEGATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body4(); // \Swagger\Client\Model\Body4 | 

try {
    $result = $apiInstance->roleSetEnterpriseDelegatedToOperator($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->roleSetEnterpriseDelegatedToOperator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body4**](../Model/Body4.md)|  |

### Return type

[**\Swagger\Client\Model\RoleSetEnterpriseDelegatedToOperatorResult**](../Model/RoleSetEnterpriseDelegatedToOperatorResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSetEnterpriseProxyDelegatedToOperator**
> \Swagger\Client\Model\RoleSetEnterpriseProxyDelegatedToOperatorResult roleSetEnterpriseProxyDelegatedToOperator($body)

Grant enterprise proxy access to the network operator

When an enterprise proxy is delegated to the operator, operator users are granted access to view, configure and troubleshoot objects owned by the proxy.  Privileges required:  `UPDATE` `ENTERPRISE_PROXY_DELEGATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body5(); // \Swagger\Client\Model\Body5 | 

try {
    $result = $apiInstance->roleSetEnterpriseProxyDelegatedToOperator($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->roleSetEnterpriseProxyDelegatedToOperator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body5**](../Model/Body5.md)|  |

### Return type

[**\Swagger\Client\Model\RoleSetEnterpriseProxyDelegatedToOperatorResult**](../Model/RoleSetEnterpriseProxyDelegatedToOperatorResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSetEnterpriseUserManagementDelegatedToOperator**
> \Swagger\Client\Model\RoleSetEnterpriseUserManagementDelegatedToOperatorResult roleSetEnterpriseUserManagementDelegatedToOperator($body)

Grant enterprise user access to the network operator

When enterprise user management is delegated to the operator, operator users are granted enterprise-level user management capabilities (user creation, password resets, etc.).  Privileges required:  `UPDATE` `ENTERPRISE_DELEGATION`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body6(); // \Swagger\Client\Model\Body6 | 

try {
    $result = $apiInstance->roleSetEnterpriseUserManagementDelegatedToOperator($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->roleSetEnterpriseUserManagementDelegatedToOperator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body6**](../Model/Body6.md)|  |

### Return type

[**\Swagger\Client\Model\RoleSetEnterpriseUserManagementDelegatedToOperatorResult**](../Model/RoleSetEnterpriseUserManagementDelegatedToOperatorResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemPropertyGetSystemProperties**
> \Swagger\Client\Model\SystemPropertyGetSystemPropertiesResultItem[] systemPropertyGetSystemProperties($body)

Get all system properties

Get a list of all configured system properties.  Privileges required:  `READ` `SYSTEM_PROPERTY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SystemPropertyGetSystemProperties(); // \Swagger\Client\Model\SystemPropertyGetSystemProperties | 

try {
    $result = $apiInstance->systemPropertyGetSystemProperties($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->systemPropertyGetSystemProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SystemPropertyGetSystemProperties**](../Model/SystemPropertyGetSystemProperties.md)|  |

### Return type

[**\Swagger\Client\Model\SystemPropertyGetSystemPropertiesResultItem[]**](../Model/SystemPropertyGetSystemPropertiesResultItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemPropertyGetSystemProperty**
> \Swagger\Client\Model\SystemPropertyGetSystemPropertyResult systemPropertyGetSystemProperty($body)

Get system property

Get a system property by object id or other attribute.  Privileges required:  `READ` `SYSTEM_PROPERTY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SystemPropertyGetSystemProperty(); // \Swagger\Client\Model\SystemPropertyGetSystemProperty | 

try {
    $result = $apiInstance->systemPropertyGetSystemProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->systemPropertyGetSystemProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SystemPropertyGetSystemProperty**](../Model/SystemPropertyGetSystemProperty.md)|  |

### Return type

[**\Swagger\Client\Model\SystemPropertyGetSystemPropertyResult**](../Model/SystemPropertyGetSystemPropertyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemPropertyInsertOrUpdateSystemProperty**
> \Swagger\Client\Model\SystemPropertyInsertOrUpdateSystemPropertyResult systemPropertyInsertOrUpdateSystemProperty($body)

Insert or update a system property

Insert a system property. If property with the given name already exists, the property will be updated.  Privileges required:  `CREATE` `SYSTEM_PROPERTY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SystemPropertyInsertOrUpdateSystemProperty(); // \Swagger\Client\Model\SystemPropertyInsertOrUpdateSystemProperty | 

try {
    $result = $apiInstance->systemPropertyInsertOrUpdateSystemProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->systemPropertyInsertOrUpdateSystemProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SystemPropertyInsertOrUpdateSystemProperty**](../Model/SystemPropertyInsertOrUpdateSystemProperty.md)|  |

### Return type

[**\Swagger\Client\Model\SystemPropertyInsertOrUpdateSystemPropertyResult**](../Model/SystemPropertyInsertOrUpdateSystemPropertyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemPropertyInsertSystemProperty**
> \Swagger\Client\Model\SystemPropertyInsertSystemPropertyResult systemPropertyInsertSystemProperty($body)

Insert a system property

Insert a new system property.  Privileges required:  `CREATE` `SYSTEM_PROPERTY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SystemPropertyInsertSystemProperty(); // \Swagger\Client\Model\SystemPropertyInsertSystemProperty | 

try {
    $result = $apiInstance->systemPropertyInsertSystemProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->systemPropertyInsertSystemProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SystemPropertyInsertSystemProperty**](../Model/SystemPropertyInsertSystemProperty.md)|  |

### Return type

[**\Swagger\Client\Model\SystemPropertyInsertSystemPropertyResult**](../Model/SystemPropertyInsertSystemPropertyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemPropertyUpdateSystemProperty**
> \Swagger\Client\Model\SystemPropertyUpdateSystemPropertyResult systemPropertyUpdateSystemProperty($body)

Update a system property

Update an existing system property, provided an object `id` or other identifying attributes  Privileges required:  `UPDATE` `SYSTEM_PROPERTY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SystemPropertyUpdateSystemProperty(); // \Swagger\Client\Model\SystemPropertyUpdateSystemProperty | 

try {
    $result = $apiInstance->systemPropertyUpdateSystemProperty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->systemPropertyUpdateSystemProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SystemPropertyUpdateSystemProperty**](../Model/SystemPropertyUpdateSystemProperty.md)|  |

### Return type

[**\Swagger\Client\Model\SystemPropertyUpdateSystemPropertyResult**](../Model/SystemPropertyUpdateSystemPropertyResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vcoInventoryAssociateEdge**
> \Swagger\Client\Model\InlineResponse2001 vcoInventoryAssociateEdge($body)

Return inventory items available at this VCO

Assigns an edge in the inventory to an Enterprise. To perform the action, the edge should already be in a STAGING state. The assignment can be done at an enterprise level, without selecting a destination Edge profile. In such a case, the inventory edge is assigned to a staging profile within the Enterprise. Optionally a profile or destination edge can be assigned to this inventory edge. The edge in the inventory can be assigned to any profile. The inventory edge can be assigned to an Enterprise edge only if it is in a PENDING/REACTIVATION_PENDING state.  Privileges required:  `CREATE` `ENTERPRISE`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\VcoInventoryAssociateEdge(); // \Swagger\Client\Model\VcoInventoryAssociateEdge | 

try {
    $result = $apiInstance->vcoInventoryAssociateEdge($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->vcoInventoryAssociateEdge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\VcoInventoryAssociateEdge**](../Model/VcoInventoryAssociateEdge.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vcoInventoryGetInventoryItems**
> \Swagger\Client\Model\VcoInventoryGetInventoryItemsResult vcoInventoryGetInventoryItems($body)

Return inventory items available at this VCO

Retrieve all the inventory information available with this VCO. This method does not have required parameters. The optional parameters are  enterpriseId - Return inventory items belonging to that enterprise. If the caller context is an enterprise, this value will be taken from token itself. modifiedSince - Used to retrieve inventory items that have been modified in the last modifiedSince hours. with - an array containing the string \"edge\" to get details about details about the provisioned edge if any.  Privileges required:  `READ` `INVENTORY`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AllApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\VcoInventoryGetInventoryItems(); // \Swagger\Client\Model\VcoInventoryGetInventoryItems | 

try {
    $result = $apiInstance->vcoInventoryGetInventoryItems($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllApi->vcoInventoryGetInventoryItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\VcoInventoryGetInventoryItems**](../Model/VcoInventoryGetInventoryItems.md)|  |

### Return type

[**\Swagger\Client\Model\VcoInventoryGetInventoryItemsResult**](../Model/VcoInventoryGetInventoryItemsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

