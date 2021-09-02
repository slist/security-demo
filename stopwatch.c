#include <stdio.h>
#include <sys/time.h>
#include <stdlib.h>
#include <stddef.h>

// gcc -o stopwatch stopwatch.c

int main()
{
    struct timeval start, now;
    unsigned long diff,s,ms,us;

    printf("Stopwatch : really fast counter\n");

    gettimeofday(&start,NULL);

    while(1){
    	gettimeofday(&now,NULL);
	diff = (now.tv_sec * 1000000 + now.tv_usec) - (start.tv_sec * 1000000 + start.tv_usec);
	s = diff / 1000000;
	ms = (diff - s * 1000000)/1000;
	us = diff % 1000;
	printf("Time : %ld s %3ld ms %3ld us\n", s, ms, us);
    }
    return 0;
}
