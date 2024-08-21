#include <iostream>
using namespace std;

main(){

	int matriz[3][3], multi = 0;

	for(int i=0; i<3; i++){
		for(int j=0; j<3; j++){
			cout<<"Informe o num:   ";
			cin>>matriz[i][j];
		}
	}
	for(int i=0; i<3; i++){
		for(int j=0; j<3; j++){
			cout<<matriz[i][j]<<"   ";
		}
		cout<<"\n";
	}

	for(int i=0; i<3; i++){
		for(int j=0; j<3; j++){
			multi=matriz[i][j]*matriz[0][0];
			cout<<multi<<" ";
		}
	cout<<"\n";
	}
}
