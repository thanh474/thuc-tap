Cấu hình hostname, domain name, enable password, banner mode:

ciscoasa> ena
Password: 
ciscoasa# conf t
ciscoasa(config)# 

***************************** NOTICE *****************************

Help to improve the ASA platform by enabling anonymous reporting,
which allows Cisco to securely receive minimal error and health
information from the device. To learn more about this feature,
please visit: http://www.cisco.com/go/smartcall

Would you like to enable anonymous error reporting to help improve
the product? [Y]es, [N]o, [A]sk later: Y

Enabling anonymous reporting.
Adding "call-home reporting anonymous" to running configuration...

Please remember to save your configuration.

ciscoasa(config)# hostname fw-vnskills-org
fw-vnskills-org(config)# domain-name vnskills.org
fw-vnskills-org(config)# enable password asa@1234
fw-vnskills-org(config)# banner motd -----------------------------------------$
fw-vnskills-org(config)# banner mote Ban dang truy cap vao firewall kiem soat $
fw-vnskills-org(config)# banner motd -----------------------------------------$
fw-vnskills-org(config)# exit
fw-vnskills-org# exit

Logoff

-------------------------------------------
Ban dang truy cap vao firewall kiem soat public cloud network
-------------------------------------------
Type help or '?' for a list of available commands.
fw-vnskills-org> ena
Password: 
Invalid password
Password: ********
fw-vnskills-org# 


Cấu hình AES mã hóa Password:

fw-vnskills-org# 
fw-vnskills-org# conf t
fw-vnskills-org(config)# show password encryption 
Password Encryption: Disabled
Master key hash: Not set(saved)
fw-vnskills-org(config)# key config-key password-encryption asa@1234
fw-vnskills-org(config)# password encryption aes 
fw-vnskills-org(config)# show password encryption 
Password Encryption: Enabled
Master key hash: 0x17ffbda1 0x624e0740 0x23116d82 0x237a752c 0x4ae5eeb3(not saved)
fw-vnskills-org(config)# 
fw-vnskills-org(config)# int g0/0
fw-vnskills-org(config-if)# nameif outside                     
INFO: Security level for "outside" set to 0 by default.
fw-vnskills-org(config-if)# security-level 0
fw-vnskills-org(config-if)# ip add 200.220.55.2 255.255.255.240
fw-vnskills-org(config-if)# no shut
fw-vnskills-org(config-if)# exit
fw-vnskills-org(config)# int g0/1
fw-vnskills-org(config-if)# nameif inside
INFO: Security level for "inside" set to 100 by default.
fw-vnskills-org(config-if)# secur
fw-vnskills-org(config-if)# security-level 100
fw-vnskills-org(config-if)# ip add 10.10.10.30 255.255.255.224
fw-vnskills-org(config-if)# no shut
fw-vnskills-org(config-if)# exit
fw-vnskills-org(config)# 
fw-vnskills-org(config)# show ip
System IP Addresses:
Interface                Name                   IP address      Subnet mask     Method 
GigabitEthernet0/0       outside                200.220.55.2    255.255.255.240 manual
GigabitEthernet0/1       inside                 10.10.10.30     255.255.255.224 manual
Current IP Addresses:
Interface                Name                   IP address      Subnet mask     Method 
GigabitEthernet0/0       outside                200.220.55.2    255.255.255.240 manual
GigabitEthernet0/1       inside                 10.10.10.30     255.255.255.224 manual
fw-vnskills-org(config)# show int ip b
Warning: ASAv platform license state is Unlicensed.
Install ASAv platform license for full functionality.
r
Interface                  IP-Address      OK? Method Status                Protocol
GigabitEthernet0/0         200.220.55.2    YES manual up                    up  
GigabitEthernet0/1         10.10.10.30     YES manual up                    up  
GigabitEthernet0/2         unassigned      YES unset  administratively down up  
GigabitEthernet0/3         unassigned      YES unset  administratively down up  
GigabitEthernet0/4         unassigned      YES unset  administratively down up  
GigabitEthernet0/5         unassigned      YES unset  administratively down up  
GigabitEthernet0/6         unassigned      YES unset  administratively down up  
Management0/0              unassigned      YES unset  administratively down up  
fw-vnskills-org(config)# route outside 0.0.0.0 0.0.0.0 200.220.55.14
fw-vnskills-org(config)# show route

Codes: L - local, C - connected, S - static, R - RIP, M - mobile, B - BGP
       D - EIGRP, EX - EIGRP external, O - OSPF, IA - OSPF inter area 
       N1 - OSPF NSSA external type 1, N2 - OSPF NSSA external type 2
       E1 - OSPF external type 1, E2 - OSPF external type 2, V - VPN
       i - IS-IS, su - IS-IS summary, L1 - IS-IS level-1, L2 - IS-IS level-2
       ia - IS-IS inter area, * - candidate default, U - per-user static route
       o - ODR, P - periodic downloaded static route, + - replicated route
Gateway of last resort is 200.220.55.14 to network 0.0.0.0

S*       0.0.0.0 0.0.0.0 [1/0] via 200.220.55.14, outside
C        10.10.10.0 255.255.255.224 is directly connected, inside
L        10.10.10.30 255.255.255.255 is directly connected, inside
C        200.220.55.0 255.255.255.240 is directly connected, outside
L        200.220.55.2 255.255.255.255 is directly connected, outside

fw-vnskills-org(config)# ping 8.8.8.8
Type escape sequence to abort.
Sending 5, 100-byte ICMP Echos to 8.8.8.8, timeout is 2 seconds:
!!!!!
Success rate is 100 percent (5/5), round-trip min/avg/max = 30/98/200 ms
fw-vnskills-org(config)# 




