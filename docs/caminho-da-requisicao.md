# Caminho da Requisição

## Site: Amazon

## dig

### Resultado:  
```
; <<>> DiG 9.18.30-0ubuntu0.24.04.1-Ubuntu <<>> www.amazon.com.br
;; global options: +cmd
;; Got answer:
;; ->>HEADER<<- opcode: QUERY, status: NOERROR, id: 65252
;; flags: qr rd ra; QUERY: 1, ANSWER: 3, AUTHORITY: 1, ADDITIONAL: 1

;; OPT PSEUDOSECTION:
; EDNS: version: 0, flags:; udp: 65494
;; QUESTION SECTION:
;www.amazon.com.br.		IN	A

;; ANSWER SECTION:
www.amazon.com.br.	22	IN	CNAME	tp.2afc17682-frontier.amazon.com.br.
tp.2afc17682-frontier.amazon.com.br. 22	IN CNAME cf.2afc17682-frontier.amazon.com.br.
cf.2afc17682-frontier.amazon.com.br. 22	IN A	18.67.125.179

;; AUTHORITY SECTION:
2afc17682-frontier.amazon.com.br. 22 IN	SOA	ns-581.awsdns-08.net. awsdns-hostmaster.amazon.com. 1 7200 900 1209600 86400

;; Query time: 0 msec
;; SERVER: 127.0.0.53#53(127.0.0.53) (UDP)
;; WHEN: Thu Nov 26 16:06:25 -03 2026
;; MSG SIZE  rcvd: 199
```
