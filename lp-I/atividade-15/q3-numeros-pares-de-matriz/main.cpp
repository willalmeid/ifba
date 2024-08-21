#include <iostream>
using namespace std;

main () {
	int matriz [4] [4];
	
	for( int i=0; i<4; i++) {
		for (int j=0; j<4; j++){
			cout<< "Digite um mumero:   ";
			cin>>matriz [i] [j];
		}	
	}	

	for( int i=0; i<4; i++) {
		for (int j=0; j<4; j++){
			if (matriz [i] [j]%2==0)
			cout<< matriz [i] [j] <<" ";
			else
			cout<<" 	";
		}
		cout<< "\n";		
	}
}
