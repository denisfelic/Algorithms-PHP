#Ordena uma lista
#Insertion Sort

```
maisBarato = 0;
atual = 0;
precos =  [1000, 46 , 16, 42, 18 ];

para atual =0 até 5 exclusive{
	analise = atual;
	
	 if(analise > 0){
		enquanto(produtos[analise] > produtos[atual - 1]){
			temp = produtos[analise];
			produtos[analise] = produtos[atual - 1];
			produtos[atual -1] = temp;
			analise--;
		}
	 }
}
```


