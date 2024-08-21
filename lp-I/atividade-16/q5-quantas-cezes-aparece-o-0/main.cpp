#include <iostream>
using namespace std;

main () {
	int matriz [4] [4], qtd=0;
	
	for( int i=0; i<4; i++) {
		for (int j=0; j<4; j++){
			cout<< "Digite um mumero:   ";
			cin>>matriz [i] [j];
		  if (matriz [i] [j]==0)
		  qtd++;
		}	
	}	

	for( int i=0; i<4; i++) {
		for (int j=0; j<4; j++){
			cout<< matriz [i] [j] <<"   ";
		}
		cout<< "\n";	
	}	
	cout<<"\n a quantidade de zeros sao:   "<<qtd;
}
