# Iniciando curso PHP

## Habilitando mostrar os erros do PHP no Apache

Rodar o comando: 

``` 

sudo subl /etc/php/7.0/apache2/php.ini 
Procurar por "display_erros()" e deixar como On.
```

Depois disso devemos restartar o servidor:
> sudo service apache2 restart
