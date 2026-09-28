#include <stdio.h>
#include <string.h>

#define MAX_IPS 10

int main()
{
    char blacklist[MAX_IPS][16] = {
        "192.168.1.50",
        "192.168.1.60",
        "10.0.0.100"
    };

    char ip[16];
    int i, blocked = 0;

    printf("=====================================\n");
    printf("       IP BLACKLIST DEMONSTRATION\n");
    printf("=====================================\n");

    printf("\nBlocked IP addresses:\n");

    for (i = 0; i < 3; i++)
        printf("  %s\n", blacklist[i]);

    printf("\nEnter source IP address: ");
    scanf("%15s", ip);

    for (i = 0; i < 3; i++)
    {
        if (strcmp(ip, blacklist[i]) == 0)
        {
            blocked = 1;
            break;
        }
    }

    printf("\nSource IP: %s\n", ip);

    if (blocked)
        printf("RESULT: BLOCKED\n");
    else
        printf("RESULT: ALLOWED\n");

    return 0;
}