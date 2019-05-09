<?php

$metadata['https://keycloak.kvalitetsit.dk/auth/realms/broker'] = array (
  'selectid' => 'default',
  'entityid' => 'https://keycloak.kvalitetsit.dk/auth/realms/broker',
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'sign.authnrequest' => true,
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://keycloak.kvalitetsit.dk/auth/realms/broker/protocol/saml',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://keycloak.kvalitetsit.dk/auth/realms/broker/protocol/saml',
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://keycloak.kvalitetsit.dk/auth/realms/broker/protocol/saml',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://keycloak.kvalitetsit.dk/auth/realms/broker/protocol/saml',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://keycloak.kvalitetsit.dk/auth/realms/broker/protocol/saml',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDZTCCAk2gAwIBAgIEE2eeAjANBgkqhkiG9w0BAQsFADBjMQswCQYDVQQGEwJESzEQMA4GA1UECBMHRGVubWFyazEPMA0GA1UEBxMGQWFyaHVzMQwwCgYDVQQKEwNLSVQxDDAKBgNVBAsTA0tJVDEVMBMGA1UEAxMMTmlscyBKb2Vuc2VuMB4XDTE5MDQzMDEzMTg1MloXDTE5MDcyOTEzMTg1MlowYzELMAkGA1UEBhMCREsxEDAOBgNVBAgTB0Rlbm1hcmsxDzANBgNVBAcTBkFhcmh1czEMMAoGA1UEChMDS0lUMQwwCgYDVQQLEwNLSVQxFTATBgNVBAMTDE5pbHMgSm9lbnNlbjCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAI1xtL7/0a2D4k8EHVHQE4aRXyZQtLgtJUJeou+bq0phs4SjNR0kA3p8BLw4pYoTyYtRmU0WDLGakxNRfV3+lNsh5x4MIsscO0MbVnWAYzQtGW88ap3uCFuqyRCZtq9HTQDBeoR/t/ZHDH1oqKUAZn+wPIgISgELKO8O8dulxvXfs1jGMlxy/pTA5jxHOwymMROHyPSJ4EgryKW28FN5GmXYF2j6qXR+ncDanecLQdG2l5jb5aXW0i1zWo8K3Fa3Lc9SmPJzl39eCO+jEGfxTJ9KMuIRVMJA2VQFohgLWnbpVu9NDjU59TWasKiyGgH6FD6x2RZtKEfR7f5g10w/goMCAwEAAaMhMB8wHQYDVR0OBBYEFK36AbuJsyLCyl8Tu/y77Hv68snPMA0GCSqGSIb3DQEBCwUAA4IBAQBF4P/kF6N3UYM3xAmu+9nw8rf90BV1FbRVz+EyHGj7GR81sowEGaCTebov9WjAJ5BfXwUZ2OA2s6IH4Q1gmlQhaenaV5aqYTweKsq3CPS/3y7U8XU1Tpsb5XZgO0n1zr0ULWYKpE4VeT30ynbzuvIr86X5Wiz+CaNaFxT5m+76pIVX0gDEI5wRhTrI9BRj6iQ/6zYC7y8kkLbu/vKWl0raZDM+f60HXMTLZl3L7EDAx01tInY7535hYO/4+bPOqOBgHw/L1B84lrhOBQ3XaRfPUdOeBYdVBYLEtmLu8aWnSvwxo+pOGVOADyZjlNYD7kdvFkiSkSPM0xOg6ZORmEuM',
    ),
  ),
);

$metadata['http://localhost:8092/venliglogin-auth/saml2/idp/metadata.php'] = array (
  'selectid' => 'twofactor',
  'entityid' => 'http://localhost:8092/venliglogin-auth/saml2/idp/metadata.php',
  'contacts' => 
  array (
    0 => 
    array (
      'contactType' => 'technical',
      'surName' => 'Administrator',
      'emailAddress' => 
      array (
        0 => 'eva@kvalitetsit.dk',
      ),
    ),
  ),
  'metadata-set' => 'saml20-idp-remote',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://localhost:8092/venliglogin-auth/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://localhost:8092/venliglogin-auth/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDZTCCAk2gAwIBAgIJAIFZhySXhzPdMA0GCSqGSIb3DQEBCwUAMEkxCzAJBgNVBAYTAkRLMRMwEQYDVQQIDApTb21lLVN0YXRlMRAwDgYDVQQKDAdDb25zZW50MRMwEQYDVQQLDApDb25zZW50SWRwMB4XDTE3MDQwNTEzMjkwMloXDTI3MDQwNTEzMjkwMlowSTELMAkGA1UEBhMCREsxEzARBgNVBAgMClNvbWUtU3RhdGUxEDAOBgNVBAoMB0NvbnNlbnQxEzARBgNVBAsMCkNvbnNlbnRJZHAwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQC9AxyeiVnRJCNMEAEcagJTPETBA+ZNxmM0ECkyGual3CxOCb/6IABI83U9LS+h8CczH+GQ7BU359auqcTYcQGT3SqKxSxEfINZrZ1vyuCOJyRU9FIB+JiODx4q131kMwCklvJX0cinAQvc8zRGzRDOFi3bf3qfca2532moUO20SaiYDb4zBnEvtCChzGeTw08IqhDHEDJu7T875YUuFmVyFjlkg50THd/a6xUBukgZFNLo4QP+UaNusAoWKYd0PBoa4fwzp2zW1HHPrLnEdH8+9bhSJTBMkw9SVDKZHa8xfuc1HHZfWaPH0Gt5HF9rmznaRwP0B3nDqChXnQxz/C07AgMBAAGjUDBOMB0GA1UdDgQWBBTG70/OaKbvD7BTljJoiNye6mZv3jAfBgNVHSMEGDAWgBTG70/OaKbvD7BTljJoiNye6mZv3jAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBAQCuuiwRDmMTDcjnFacSIRS0b7htZwKVrN1POz84iBVPTIPdTHZIcGKL3Vm8zR2GNx+mH+AYDNO1pgyp8oYvUjvtcEemQByoVbBuUMJTG6x0Zfct7Ih6V57uvOcSLxIbTLYLUqvkFekvS46QtVlne5q/NEAsaB7jDLa/O7tgTmedPKtu8X2Dbo3WGcvgDkWj7pPPcYOuwO/BLvRRs9n7Etx8oDFE8cs9xjmq8Ma2FcNonmSY8RybT2VFv6wc91nC18+rj4rdRzJNH/C/9ZTMbehPce1+jnsJ7Ahp84NnwDFm/owCdB1qZcnvXF1xoz+vMFOcZHGIxaoafXs3WEU6acD4',
    ),
    1 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDZTCCAk2gAwIBAgIJAIFZhySXhzPdMA0GCSqGSIb3DQEBCwUAMEkxCzAJBgNVBAYTAkRLMRMwEQYDVQQIDApTb21lLVN0YXRlMRAwDgYDVQQKDAdDb25zZW50MRMwEQYDVQQLDApDb25zZW50SWRwMB4XDTE3MDQwNTEzMjkwMloXDTI3MDQwNTEzMjkwMlowSTELMAkGA1UEBhMCREsxEzARBgNVBAgMClNvbWUtU3RhdGUxEDAOBgNVBAoMB0NvbnNlbnQxEzARBgNVBAsMCkNvbnNlbnRJZHAwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQC9AxyeiVnRJCNMEAEcagJTPETBA+ZNxmM0ECkyGual3CxOCb/6IABI83U9LS+h8CczH+GQ7BU359auqcTYcQGT3SqKxSxEfINZrZ1vyuCOJyRU9FIB+JiODx4q131kMwCklvJX0cinAQvc8zRGzRDOFi3bf3qfca2532moUO20SaiYDb4zBnEvtCChzGeTw08IqhDHEDJu7T875YUuFmVyFjlkg50THd/a6xUBukgZFNLo4QP+UaNusAoWKYd0PBoa4fwzp2zW1HHPrLnEdH8+9bhSJTBMkw9SVDKZHa8xfuc1HHZfWaPH0Gt5HF9rmznaRwP0B3nDqChXnQxz/C07AgMBAAGjUDBOMB0GA1UdDgQWBBTG70/OaKbvD7BTljJoiNye6mZv3jAfBgNVHSMEGDAWgBTG70/OaKbvD7BTljJoiNye6mZv3jAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBAQCuuiwRDmMTDcjnFacSIRS0b7htZwKVrN1POz84iBVPTIPdTHZIcGKL3Vm8zR2GNx+mH+AYDNO1pgyp8oYvUjvtcEemQByoVbBuUMJTG6x0Zfct7Ih6V57uvOcSLxIbTLYLUqvkFekvS46QtVlne5q/NEAsaB7jDLa/O7tgTmedPKtu8X2Dbo3WGcvgDkWj7pPPcYOuwO/BLvRRs9n7Etx8oDFE8cs9xjmq8Ma2FcNonmSY8RybT2VFv6wc91nC18+rj4rdRzJNH/C/9ZTMbehPce1+jnsJ7Ahp84NnwDFm/owCdB1qZcnvXF1xoz+vMFOcZHGIxaoafXs3WEU6acD4',
    ),
  ),
);
