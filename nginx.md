# HTTP 常见的Status
* 200	OK	Data successfully acquired
* 400	Bad Request	Corrupt request data on the client side
* 401	Unauthorized	Authorization error
* 403	Forbidden	The resource exists, but access is not possible due to a reason other than an authorization error.
* 500	Internal Server Error	An error on the API server side
* 503	Service Unavailable	The API cannot be used temporarily
* 
* 
# Nginx SSL proxy for node
```
    upstream nodejs { 
          server 127.0.0.1:4545 max_fails=0; 
    } 

   server { 
      listen 443; 
      ssl    on; 
      ssl_certificate    newlocalhost.crt; 
      ssl_certificate_key     newlocalhost.key; 
      server_name nodejs.newlocalhost.com; 

      add_header Strict-Transport-Security max-age=500; 

      location / { 
        proxy_pass  http://nodejs; 
        proxy_redirect off; 
        proxy_set_header Host $host ; 
        proxy_set_header X-Real-IP $remote_addr ; 
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for ; 
        proxy_set_header X-Forwarded-Proto https; 
      } 
   }
```