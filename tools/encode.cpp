#include <iostream>
#include <cstdio>
#include <string>

using namespace std;

int main() {
	int c;
	while ((c = getchar()) != EOF){
		string tmp = "00000000";
		int i = 7;
		while (c > 0) {
			tmp[i--] = c % 2 + '0';
			c /= 2;
		}
		cout << tmp << " ";
	}
	cout << endl;
	return 0;
}
