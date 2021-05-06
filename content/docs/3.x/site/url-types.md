---
layout: docs
title: Types of site URLs
description: There are two types of URLs, one which is always the same and the other which keeps changing
group: site
aliases:
  - "/docs/site/"
  - "/site/"
toc: true
---

## Full Path

This option should be selected when the URL of your web page is always the same. like this.

- `https://example.in/example-1.html`
- `https://example.in/insert/entry/`

## location.pathname

This option should be selected when the [hostname](https://en.wikipedia.org/wiki/Hostname) of your web page is changing. like this.

<table class="table">
  <thead>
    <tr>
      <th scope="col">Webpage URL</th>
      <th scope="col">When you select this option, it will be converted.</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>http://example.in/site/example-1.html</td>
      <td>{{<markdown>}}`/site/example-1.html`{{</markdown>}}</td>
    </tr>
    <tr>
      <td>https://example.in/insert/entry/</td>
      <td>{{<markdown>}}`/insert/entry`{{</markdown>}}</td>
    </tr>
  </tbody>
</table>

## location.hostname

This option should be selected when the URL of your web page is always changing. like this.

- `https://example.in/example-1.html?id={random_number}`
- `https://example.in/insert/entry/{random_string}`

<table class="table">
  <thead>
    <tr>
      <th scope="col">Webpage URL</th>
      <th scope="col">When you select this option, it will be converted.</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>https://example.in/example-1.html?id={random_number}</td>
      <td>{{<markdown>}}`example.in`{{</markdown>}}</td>
    </tr>
    <tr>
      <td>https://example.com/insert/entry/{random_string}</td>
      <td>{{<markdown>}}`example.com`{{</markdown>}}</td>
    </tr>
  </tbody>
</table>

If you know [Javascript Language](https://en.wikipedia.org/wiki/JavaScript), then you can understand it easily.