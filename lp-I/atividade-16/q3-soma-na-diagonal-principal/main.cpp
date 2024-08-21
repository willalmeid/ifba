#include <iostream>
using namespace std;

main () {
	int matriz [4] [5], soma=0;
	
	for( int i=0; i<4; i++) {
		for (int j=0; j<5; j++){
			cout<< "Digite um mumero:   ";
			cin>>matriz [i] [j];
		}
		soma= matriz[0][0]+matriz[1][1]+matriz[2][2]+matriz [3][3];
	}	

	for( int i=0; i<4; i++) {
		for (int j=0; j<5; j++){
			cout<< matriz [i] [j] <<"   ";
		}
		cout<< "\n";	
	}
	cout<<"\n a soma da diagonal principal da matriz e:   "<<soma;
}
