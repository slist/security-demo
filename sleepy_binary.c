#include <unistd.h> /* sleep  */
#include <stdio.h>  /* printf */

/*
 * Compile with gcc:
 * gcc -o sleepy_binary sleepy_binary.c
 */

int main()
{
	printf("Sleeping for one minute...\n");
	sleep(60);
	printf("Wake up !\n");
	return 0;
}
