#include <stdio.h>
#include <string.h>

#define MAX_IPS 10

int main()
{
    char whitelist[MAX_IPS][16] = {
        "127.0.0.1",
        "192.168.1.10",
        "192.168.1.20"
    };

    char ip[16];
    int i, allowed = 0;

    printf("=====================================\n");
    printf("       IP WHITELIST DEMONSTRATION\n");
    printf("=====================================\n");

    printf("\nAllowed IP addresses:\n");

    for (i = 0; i < 3; i++)
        printf("  %s\n", whitelist[i]);

    printf("\nEnter source IP address: ");
    scanf("%15s", ip);

    for (i = 0; i < 3; i++)
    {
        if (strcmp(ip, whitelist[i]) == 0)
        {
            allowed = 1;
            break;
        }
    }

    printf("\nSource IP: %s\n", ip);

    if (allowed)
        printf("RESULT: ALLOWED\n");
    else
        printf("RESULT: DENIED\n");

    return 0;
}