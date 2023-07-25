---
description: >-
  IP Details Lookup is a simple Node.js website that provides details about an
  IP address, including geographic information, ISP, and IP types (IPv6 and
  IPv4).
---

# Ipflix



## IP Details Lookup

IP Details Lookup is a simple Node.js website that provides details about an IP address, including geographic information, ISP, and IP types (IPv6 and IPv4). This repository contains the server-side code for the website.

### Description

Our website offers a user-friendly interface to look up detailed information about any IP address. It also provides an API that allows developers to programmatically retrieve IP address details for their applications.

* Website: [https://ipflix.vercel.app/](https://ipflix.vercel.app/) || [https://ipflix.sh20raj.repl.co](https://ipflix.sh20raj.repl.co/)
* GitHub Repository: [https://github.com/SH20RAJ/Ipflix](https://github.com/SH20RAJ/Ipflix)

### API Documentation

The IP Details Lookup API provides details about the IP address related to the incoming request.

#### Endpoint

```uri
GET https://ipflix.sh20raj.repl.co/api/ipdetails
```

Response

{% code overflow="wrap" %}
```json5
{"timestamp":"2023-07-25T04:23:31.666Z","ip":"162.68.666.666","city":"Patna","region":"Bihar","country":"IN","loc":"26.6666,85.6666","org":"AS6666 Reliance Jio Infocomm Limited","timezone":"Asia/Kolkata","isp":"AS6666 Reliance Jio Infocomm Limited","ipv6":"N/A","ipv4":"N/A","source":""}
```
{% endcode %}











