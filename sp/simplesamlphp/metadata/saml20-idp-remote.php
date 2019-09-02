<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */
 $metadata['http://auth.saml.net/simpleidp/saml2/idp/metadata.php'] = array (
   'metadata-set' => 'saml20-idp-remote',
   'entityid' => 'http://auth.saml.net/simpleidp/saml2/idp/metadata.php',
   'SingleSignOnService' =>
   array (
     0 =>
     array (
       'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
       'Location' => 'http://auth.saml.net/simpleidp/saml2/idp/SSOService.php',
     ),
   ),
   'SingleLogoutService' =>
   array (
     0 =>
     array (
       'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
       'Location' => 'http://auth.saml.net/simpleidp/saml2/idp/SingleLogoutService.php',
     ),
   ),
   'certData' => 'MIIEPjCCAyagAwIBAgIJANiLMazs+NTkMA0GCSqGSIb3DQEBCwUAMIGzMQswCQYDVQQGEwJBVTERMA8GA1UECAwIVmljdG9yaWExEjAQBgNVBAcMCU1lbGJvdXJuZTEeMBwGA1UECgwVQ2F0YWx5c3QgSVQgQXVzdHJhbGlhMRYwFAYDVQQLDA1TQU1MMiBUZXN0aW5nMRswGQYDVQQDDBJzaW1wbGVzYW1scGhwLnRlc3QxKDAmBgkqhkiG9w0BCQEWGXRlc3RlckBzaW1wbGVzYW1scGhwLnRlc3QwHhcNMTgwMTMwMDYwNDQxWhcNMjgwMTMwMDYwNDQxWjCBszELMAkGA1UEBhMCQVUxETAPBgNVBAgMCFZpY3RvcmlhMRIwEAYDVQQHDAlNZWxib3VybmUxHjAcBgNVBAoMFUNhdGFseXN0IElUIEF1c3RyYWxpYTEWMBQGA1UECwwNU0FNTDIgVGVzdGluZzEbMBkGA1UEAwwSc2ltcGxlc2FtbHBocC50ZXN0MSgwJgYJKoZIhvcNAQkBFhl0ZXN0ZXJAc2ltcGxlc2FtbHBocC50ZXN0MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAytcho4jUZt6GuiyjQUUX0sKgqXQI+Hu4Cu/nsYqq7L8Zckn2kJUkRi4VkOGsDgQg5m7YISK2Cz41j9aTs+8GMdtHDXaCvIEoQZ6G5ij5KirObVGJ6cqjzn/Ks1AfEWfaw72Mz0G5FGdXVfj7RJGVX/n4rGs9Sk9SCaszcM7z63PlwdgSQmZZfDMLHBx7A3cJ207WqnzEoDszpSWlCDr92G851/9bJrOotRig1QjtZrgQfZolX74Lfq3kantSotzt+1PZV42Do06g4aLuu2AwvBsIfTELeyNGCGnAD5if9kEJtEcveDh4lB5cHbuoKXSc61ZMitA1eYbYORHqaLWtlwIDAQABo1MwUTAdBgNVHQ4EFgQUqwufrjDKNf0ZLfBUcmN03V2PD1swHwYDVR0jBBgwFoAUqwufrjDKNf0ZLfBUcmN03V2PD1swDwYDVR0TAQH/BAUwAwEB/zANBgkqhkiG9w0BAQsFAAOCAQEAbGwup/WTubME7zCB7mTo8q/ji7Jznp886Mp10+CdfVFSS6xRpjVfAy+m8t/bUyBYnIvLdKJfUeOZIRDgKvhnOstKh2s+b/UT1JWkTWA8MrVQi2F7GYJRUedTuEJmDHnYQLKPiA+IynpLYWtB7g9wcN9kIcoJdcbNz9b9L7rbYqqIW1eJNCrHwkB4NEX/9bKzMx63+PGtzAz98v7nCakoUAjZxTFrppZVengklX+C3B2jSARRs4I3e8ggGkxAhq/ubhsCe8GxgpfJZpocQ+sYflpJqP+tGj9LIRQoS36ERpVBdx2PgxDBYTajp6Sle8QddX8KxWNfo3BN+l/5zGdlMQ==',
   'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
 );
