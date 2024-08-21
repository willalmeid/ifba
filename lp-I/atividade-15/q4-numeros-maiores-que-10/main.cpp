#include <iostream>
using namespace std;

main () {
	int matriz [3] [3];
	int qtd=0;
	
	for( int i=0; i<3; i++) {
		for (int j=0; j<3; j++){
			cout<< "Digite um mumero:   ";
			cin>>matriz [i] [j];
			if (matriz [i] [j]>10)
			qtd++;
		}	
	}	
	cout<< "a quantidade de numeros maiores que 10 e: "<< qtd;	
}
