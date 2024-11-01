<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/cloudcontrolspartner/v1beta/core.proto
 * Updates to the above are reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\CloudControlsPartner\V1beta\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\CloudControlsPartner\V1beta\Customer;
use Google\Cloud\CloudControlsPartner\V1beta\EkmConnections;
use Google\Cloud\CloudControlsPartner\V1beta\GetCustomerRequest;
use Google\Cloud\CloudControlsPartner\V1beta\GetEkmConnectionsRequest;
use Google\Cloud\CloudControlsPartner\V1beta\GetPartnerPermissionsRequest;
use Google\Cloud\CloudControlsPartner\V1beta\GetPartnerRequest;
use Google\Cloud\CloudControlsPartner\V1beta\GetWorkloadRequest;
use Google\Cloud\CloudControlsPartner\V1beta\ListAccessApprovalRequestsRequest;
use Google\Cloud\CloudControlsPartner\V1beta\ListCustomersRequest;
use Google\Cloud\CloudControlsPartner\V1beta\ListWorkloadsRequest;
use Google\Cloud\CloudControlsPartner\V1beta\Partner;
use Google\Cloud\CloudControlsPartner\V1beta\PartnerPermissions;
use Google\Cloud\CloudControlsPartner\V1beta\Workload;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service describing handlers for resources
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @experimental
 *
 * @method PromiseInterface<Customer> getCustomerAsync(GetCustomerRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<EkmConnections> getEkmConnectionsAsync(GetEkmConnectionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Partner> getPartnerAsync(GetPartnerRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PartnerPermissions> getPartnerPermissionsAsync(GetPartnerPermissionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Workload> getWorkloadAsync(GetWorkloadRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listAccessApprovalRequestsAsync(ListAccessApprovalRequestsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listCustomersAsync(ListCustomersRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listWorkloadsAsync(ListWorkloadsRequest $request, array $optionalArgs = [])
 */
final class CloudControlsPartnerCoreClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.cloudcontrolspartner.v1beta.CloudControlsPartnerCore';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'cloudcontrolspartner.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'cloudcontrolspartner.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/cloud_controls_partner_core_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/cloud_controls_partner_core_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/cloud_controls_partner_core_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ . '/../resources/cloud_controls_partner_core_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a customer
     * resource.
     *
     * @param string $organization
     * @param string $location
     * @param string $customer
     *
     * @return string The formatted customer resource.
     *
     * @experimental
     */
    public static function customerName(string $organization, string $location, string $customer): string
    {
        return self::getPathTemplate('customer')->render([
            'organization' => $organization,
            'location' => $location,
            'customer' => $customer,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * ekm_connections resource.
     *
     * @param string $organization
     * @param string $location
     * @param string $customer
     * @param string $workload
     *
     * @return string The formatted ekm_connections resource.
     *
     * @experimental
     */
    public static function ekmConnectionsName(
        string $organization,
        string $location,
        string $customer,
        string $workload
    ): string {
        return self::getPathTemplate('ekmConnections')->render([
            'organization' => $organization,
            'location' => $location,
            'customer' => $customer,
            'workload' => $workload,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_location resource.
     *
     * @param string $organization
     * @param string $location
     *
     * @return string The formatted organization_location resource.
     *
     * @experimental
     */
    public static function organizationLocationName(string $organization, string $location): string
    {
        return self::getPathTemplate('organizationLocation')->render([
            'organization' => $organization,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a partner
     * resource.
     *
     * @param string $organization
     * @param string $location
     *
     * @return string The formatted partner resource.
     *
     * @experimental
     */
    public static function partnerName(string $organization, string $location): string
    {
        return self::getPathTemplate('partner')->render([
            'organization' => $organization,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * partner_permissions resource.
     *
     * @param string $organization
     * @param string $location
     * @param string $customer
     * @param string $workload
     *
     * @return string The formatted partner_permissions resource.
     *
     * @experimental
     */
    public static function partnerPermissionsName(
        string $organization,
        string $location,
        string $customer,
        string $workload
    ): string {
        return self::getPathTemplate('partnerPermissions')->render([
            'organization' => $organization,
            'location' => $location,
            'customer' => $customer,
            'workload' => $workload,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a workload
     * resource.
     *
     * @param string $organization
     * @param string $location
     * @param string $customer
     * @param string $workload
     *
     * @return string The formatted workload resource.
     *
     * @experimental
     */
    public static function workloadName(
        string $organization,
        string $location,
        string $customer,
        string $workload
    ): string {
        return self::getPathTemplate('workload')->render([
            'organization' => $organization,
            'location' => $location,
            'customer' => $customer,
            'workload' => $workload,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - customer: organizations/{organization}/locations/{location}/customers/{customer}
     * - ekmConnections: organizations/{organization}/locations/{location}/customers/{customer}/workloads/{workload}/ekmConnections
     * - organizationLocation: organizations/{organization}/locations/{location}
     * - partner: organizations/{organization}/locations/{location}/partner
     * - partnerPermissions: organizations/{organization}/locations/{location}/customers/{customer}/workloads/{workload}/partnerPermissions
     * - workload: organizations/{organization}/locations/{location}/customers/{customer}/workloads/{workload}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     *
     * @experimental
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'cloudcontrolspartner.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     *
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Gets details of a single customer
     *
     * The async variant is {@see CloudControlsPartnerCoreClient::getCustomerAsync()} .
     *
     * @example samples/V1beta/CloudControlsPartnerCoreClient/get_customer.php
     *
     * @param GetCustomerRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Customer
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function getCustomer(GetCustomerRequest $request, array $callOptions = []): Customer
    {
        return $this->startApiCall('GetCustomer', $request, $callOptions)->wait();
    }

    /**
     * Gets the EKM connections associated with a workload
     *
     * The async variant is
     * {@see CloudControlsPartnerCoreClient::getEkmConnectionsAsync()} .
     *
     * @example samples/V1beta/CloudControlsPartnerCoreClient/get_ekm_connections.php
     *
     * @param GetEkmConnectionsRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return EkmConnections
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function getEkmConnections(GetEkmConnectionsRequest $request, array $callOptions = []): EkmConnections
    {
        return $this->startApiCall('GetEkmConnections', $request, $callOptions)->wait();
    }

    /**
     * Get details of a Partner.
     *
     * The async variant is {@see CloudControlsPartnerCoreClient::getPartnerAsync()} .
     *
     * @example samples/V1beta/CloudControlsPartnerCoreClient/get_partner.php
     *
     * @param GetPartnerRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Partner
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function getPartner(GetPartnerRequest $request, array $callOptions = []): Partner
    {
        return $this->startApiCall('GetPartner', $request, $callOptions)->wait();
    }

    /**
     * Gets the partner permissions granted for a workload
     *
     * The async variant is
     * {@see CloudControlsPartnerCoreClient::getPartnerPermissionsAsync()} .
     *
     * @example samples/V1beta/CloudControlsPartnerCoreClient/get_partner_permissions.php
     *
     * @param GetPartnerPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PartnerPermissions
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function getPartnerPermissions(
        GetPartnerPermissionsRequest $request,
        array $callOptions = []
    ): PartnerPermissions {
        return $this->startApiCall('GetPartnerPermissions', $request, $callOptions)->wait();
    }

    /**
     * Gets details of a single workload
     *
     * The async variant is {@see CloudControlsPartnerCoreClient::getWorkloadAsync()} .
     *
     * @example samples/V1beta/CloudControlsPartnerCoreClient/get_workload.php
     *
     * @param GetWorkloadRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Workload
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function getWorkload(GetWorkloadRequest $request, array $callOptions = []): Workload
    {
        return $this->startApiCall('GetWorkload', $request, $callOptions)->wait();
    }

    /**
     * Deprecated: Only returns access approval requests directly associated with
     * an assured workload folder.
     *
     * The async variant is
     * {@see CloudControlsPartnerCoreClient::listAccessApprovalRequestsAsync()} .
     *
     * @example samples/V1beta/CloudControlsPartnerCoreClient/list_access_approval_requests.php
     *
     * @param ListAccessApprovalRequestsRequest $request     A request to house fields associated with the call.
     * @param array                             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     *
     * @deprecated This method will be removed in the next major version update.
     */
    public function listAccessApprovalRequests(
        ListAccessApprovalRequestsRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListAccessApprovalRequests', $request, $callOptions);
    }

    /**
     * Lists customers of a partner identified by its Google Cloud organization ID
     *
     * The async variant is {@see CloudControlsPartnerCoreClient::listCustomersAsync()}
     * .
     *
     * @example samples/V1beta/CloudControlsPartnerCoreClient/list_customers.php
     *
     * @param ListCustomersRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function listCustomers(ListCustomersRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListCustomers', $request, $callOptions);
    }

    /**
     * Lists customer workloads for a given customer org id
     *
     * The async variant is {@see CloudControlsPartnerCoreClient::listWorkloadsAsync()}
     * .
     *
     * @example samples/V1beta/CloudControlsPartnerCoreClient/list_workloads.php
     *
     * @param ListWorkloadsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function listWorkloads(ListWorkloadsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListWorkloads', $request, $callOptions);
    }
}
