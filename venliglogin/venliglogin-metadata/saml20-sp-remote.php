<?php
/**
 * SAML 2.0 remote SP metadata for simpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

$metadata['dev:kit:appa'] = array (
  'entityid' => 'dev:kit:appa',
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-sp-remote',
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'http://localhost:8082/appa/saml/SSO',
      'index' => 0,
      'isDefault' => true,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'http://localhost:8082/appa/saml/SSO',
      'index' => 1,
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'http://localhost:8082/appa/saml/SingleLogout',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://localhost:8082/appa/saml/SingleLogout',
    ),
  ),
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDmTCCAoGgAwIBAgIJAPQ2LEDwvUeJMA0GCSqGSIb3DQEBCwUAMGMxCzAJBgNVBAYTAkRLMRMw
EQYDVQQIDApTb21lLVN0YXRlMRQwEgYDVQQKDAtLdmFsaXRldHNJVDEZMBcGA1UECwwQQXBwIEEg
YWZkZWxpbmdlbjEOMAwGA1UEAwwFQXBwIEEwHhcNMTcwNDA1MDkwNjU2WhcNMjcwNDA1MDkwNjU2
WjBjMQswCQYDVQQGEwJESzETMBEGA1UECAwKU29tZS1TdGF0ZTEUMBIGA1UECgwLS3ZhbGl0ZXRz
SVQxGTAXBgNVBAsMEEFwcCBBIGFmZGVsaW5nZW4xDjAMBgNVBAMMBUFwcCBBMIIBIjANBgkqhkiG
9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtEfhCuwywC4n5g7RTLuBi7r0QrLjYuXhVNR3pPFQAMh4j8bC
xTojjB+GMkXefxVhCkqWE+C9AKibDxrHrpgYvymqgo541g56rORrorD5ogAOOPctCtp3WcPkHB99
o+QYT6tyFecWThXT14xGUaMrPQBy0zFpbeejitB3kI3ziQ6faaH1e9HbFObYPZ/IKCuqhOLa1CeF
dAIz1fqoXYlBxW83kydbY7bHa2GrzNHNOVkDO9BLXyvTaKZbgKxo+DzWSWEAUOUvz/HWK2gJdsJy
DSXRiL+jEfc4cTro3s/qzXyna0daZiwsH5RGbjUuJ1su2ojeCOMU2csHsW2sIQWsQwIDAQABo1Aw
TjAdBgNVHQ4EFgQUV6yWP7dOAQowOOjSF4UCnDhc2CIwHwYDVR0jBBgwFoAUV6yWP7dOAQowOOjS
F4UCnDhc2CIwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQsFAAOCAQEADGbR5jyH6uRTTfV85GN0
TyhE3bsYlhkhwUtOCT6MWbhwy2jye1KXRWj2xRTZZyeC9rApV4fPcWjGGVf2zf+3T4TPnDHxFfl5
wJ60R+zIUrVD8QUiFN3wys2em3RfPRF1Jajt58syzvbu4M5kX8fDzWV1UK1Y3/7qV6lG4cnb5GT5
IpW23oqYS8su/1Yfq51ul7wjXziSFJZtz+evWEcQLUkZp4S4dvWpnPiVQe2m/X9xEmkBoUNf478q
iPJpbAKIklTkmZe8/WFSZWeT3cZWzAyNQ2jxAEH3gtyqRxTLlg7sAiP2xuuWhrUDqrkX6gmjxFd+
jvrhFkdUxac94tIYKQ==',
    ),
    1 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDmTCCAoGgAwIBAgIJAPQ2LEDwvUeJMA0GCSqGSIb3DQEBCwUAMGMxCzAJBgNVBAYTAkRLMRMw
EQYDVQQIDApTb21lLVN0YXRlMRQwEgYDVQQKDAtLdmFsaXRldHNJVDEZMBcGA1UECwwQQXBwIEEg
YWZkZWxpbmdlbjEOMAwGA1UEAwwFQXBwIEEwHhcNMTcwNDA1MDkwNjU2WhcNMjcwNDA1MDkwNjU2
WjBjMQswCQYDVQQGEwJESzETMBEGA1UECAwKU29tZS1TdGF0ZTEUMBIGA1UECgwLS3ZhbGl0ZXRz
SVQxGTAXBgNVBAsMEEFwcCBBIGFmZGVsaW5nZW4xDjAMBgNVBAMMBUFwcCBBMIIBIjANBgkqhkiG
9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtEfhCuwywC4n5g7RTLuBi7r0QrLjYuXhVNR3pPFQAMh4j8bC
xTojjB+GMkXefxVhCkqWE+C9AKibDxrHrpgYvymqgo541g56rORrorD5ogAOOPctCtp3WcPkHB99
o+QYT6tyFecWThXT14xGUaMrPQBy0zFpbeejitB3kI3ziQ6faaH1e9HbFObYPZ/IKCuqhOLa1CeF
dAIz1fqoXYlBxW83kydbY7bHa2GrzNHNOVkDO9BLXyvTaKZbgKxo+DzWSWEAUOUvz/HWK2gJdsJy
DSXRiL+jEfc4cTro3s/qzXyna0daZiwsH5RGbjUuJ1su2ojeCOMU2csHsW2sIQWsQwIDAQABo1Aw
TjAdBgNVHQ4EFgQUV6yWP7dOAQowOOjSF4UCnDhc2CIwHwYDVR0jBBgwFoAUV6yWP7dOAQowOOjS
F4UCnDhc2CIwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQsFAAOCAQEADGbR5jyH6uRTTfV85GN0
TyhE3bsYlhkhwUtOCT6MWbhwy2jye1KXRWj2xRTZZyeC9rApV4fPcWjGGVf2zf+3T4TPnDHxFfl5
wJ60R+zIUrVD8QUiFN3wys2em3RfPRF1Jajt58syzvbu4M5kX8fDzWV1UK1Y3/7qV6lG4cnb5GT5
IpW23oqYS8su/1Yfq51ul7wjXziSFJZtz+evWEcQLUkZp4S4dvWpnPiVQe2m/X9xEmkBoUNf478q
iPJpbAKIklTkmZe8/WFSZWeT3cZWzAyNQ2jxAEH3gtyqRxTLlg7sAiP2xuuWhrUDqrkX6gmjxFd+
jvrhFkdUxac94tIYKQ==',
    ),
  ),
  'validate.authnrequest' => true,
  'saml20.sign.assertion' => true,
);
