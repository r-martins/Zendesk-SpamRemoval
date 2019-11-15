# Zendesk-SpamRemoval
Bulk mark tickets as spam in Zendesk

# Setup

Define $startTicket, $endTicket.

Configure $url with your zendesk subdomain, $email, and $pass that have access to Zendesk Api.

# Execute

`php zendesk-spam.php`


# Sample output
```
$ php zendesk-spam.php 
{"job_status":{"id":"8625ded01926b3410c97303e3fe1a588","url":"https://pagsegurotransparente.zendesk.com/api/v2/job_statuses/8625ded01926b3410c97303e3fe1a588.json","total":null,"progress":null,"status":"queued","message":null,"results":null}}
{"job_status":{"id":"d6037b68d62faa28290021ea8dec0ae7","url":"https://pagsegurotransparente.zendesk.com/api/v2/job_statuses/d6037b68d62faa28290021ea8dec0ae7.json","total":null,"progress":null,"status":"queued","message":null,"results":null}}
{"job_status":{"id":"11708e57d7f466a054908e320821ead4","url":"https://pagsegurotransparente.zendesk.com/api/v2/job_statuses/11708e57d7f466a054908e320821ead4.json","total":null,"progress":null,"status":"queued","message":null,"results":null}}
{"job_status":{"id":"0a854c0bedfe18738ed9cfba8e8869e6","url":"https://pagsegurotransparente.zendesk.com/api/v2/job_statuses/0a854c0bedfe18738ed9cfba8e8869e6.json","total":null,"progress":null,"status":"queued","message":null,"results":null}}
{"job_status":{"id":"e3f2bba1aa9f3c81d21d221cf094064a","url":"https://pagsegurotransparente.zendesk.com/api/v2/job_statuses/e3f2bba1aa9f3c81d21d221cf094064a.json","total":null,"progress":null,"status":"queued","message":null,"results":null}}
{"job_status":{"id":"498878a66d60eccdde1bdde6c3e365e1","url":"https://pagsegurotransparente.zendesk.com/api/v2/job_statuses/498878a66d60eccdde1bdde6c3e365e1.json","total":null,"progress":null,"status":"queued","message":null,"results":null}}
{"job_status":{"id":"8444e8e98d11133ee2f6fca14183b481","url":"https://pagsegurotransparente.zendesk.com/api/v2/job_statuses/8444e8e98d11133ee2f6fca14183b481.json","total":null,"progress":null,"status":"queued","message":null,"results":null}}
```
