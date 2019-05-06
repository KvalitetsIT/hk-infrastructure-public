<?php
/**
 * SAML 2.0 remote SP metadata for simpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */
$metadata['http://localhost:8092/venliglogin/module.php/saml/sp/metadata.php/default-sp'] = array (
  'entityid' => 'http://localhost:8092/venliglogin/module.php/saml/sp/metadata.php/default-sp',
  'contacts' => 
  array (
    0 => 
    array (
      'contactType' => 'technical',
      'givenName' => 'Administrator',
      'emailAddress' => 
      array (
        0 => 'eva@kvalitetsit.dk',
      ),
    ),
  ),
  'metadata-set' => 'shib13-sp-remote',
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'http://localhost:8092/venliglogin/module.php/saml/sp/saml2-acs.php/default-sp',
      'index' => 0,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
      'Location' => 'http://localhost:8092/venliglogin/module.php/saml/sp/saml1-acs.php/default-sp',
      'index' => 1,
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'http://localhost:8092/venliglogin/module.php/saml/sp/saml2-acs.php/default-sp',
      'index' => 2,
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
      'Location' => 'http://localhost:8092/venliglogin/module.php/saml/sp/saml1-acs.php/default-sp/artifact',
      'index' => 3,
    ),
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


