#include <iostream>
using namespace std;

main () {
	int matriz [3] [3];
	
	for( int i=0; i<3; i++) {
		for (int j=0; j<3; j++){
			cout<< "Digite um mumero:   ";
			cin>>matriz [i] [j];
		}
	}
	
	int num, posicaoi=0, posicaoj=0;
		
	cout<<"\n\t\t Digite algum numero:   ";
	cin>>num;

	for( int i=0; i<3; i++) {
		for (int j=0; j<3; j++){
			cout<< matriz [i] [j] <<"   ";
			if (num==matriz[i][j]){
				posicaoi= i;
				posicaoj= j;}
		}
		cout<< "\n";	
	}
	cout<< "o numero digitado e existente na matriz";
	cout<< "\n a posicao de i e:  "<< posicaoi;
	cout<< "\n a posicao de j e:  "<< posicaoj;
}
