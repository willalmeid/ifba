#include <iostream>
using namespace std;

main() {
	
	int a = 1, b = 999;
	
	for(int i=0; i<b; i++){
		cout<<"\ninforme o numero (digite 999 para parar): ";
		cin>>i;
		if(i<999 && i>a) {
			a=i;
			cout<<"\n"<<a;	
		} else if (i<999 && i<a)
	 		cout<<"\n"<<i;	
	}
	cout<<"\nO maior numero eh: "<<a;
}
