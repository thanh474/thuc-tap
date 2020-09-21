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
the product? [Y]es, [N]o, [A]sk later: N

In the future, if you would like to enable this feature,
issue the command "call-home reporting anonymous".

Please remember to save your configuration.

ciscoasa(config)# hostname fw-skill20-net
fw-skill20-net(config)# domain-name skill20.net
fw-skill20-net(config)# enable password asa@1234

fw-skill20-net(config)# banner motd ------------------------------------------
fw-skill20-net(config)# banner motd Ban dang truy cap vao firewall kiem soat o$
fw-skill20-net(config)# banner motd -----------------------------------------
fw-skill20-net(config)# 
fw-skill20-net# exit

Logoff

-----------------------------------------
Ban dang truy cap vao firewall 
Ban dang truy cap vao firewall kiem soat office network va private cloud network
-----------------------------------------
Type help or '?' for a list of available commands.
fw-skill20-net> ena
Password: ********
fw-skill20-net# conf t
fw-skill20-net(config)# show password encryption 
Password Encryption: Disabled
Master key hash: Not set(saved)
fw-skill20-net(config)# key config-key password-encryption asa@1234
fw-skill20-net(config)# password encryption aes 
fw-skill20-net(config)# show password encryption 
Password Encryption: Enabled
Master key hash: 0x17ffbda1 0x624e0740 0x23116d82 0x237a752c 0x4ae5eeb3(not saved)
fw-skill20-net(config)# int g0/0 
fw-skill20-net(config-if)# nameif outside
INFO: Security level for "outside" set to 0 by default.
fw-skill20-net(config-if)# security-level 0
fw-skill20-net(config-if)# ip add 200.220.55.1 255.255.255.240
fw-skill20-net(config-if)# no shut
fw-skill20-net(config-if)# exit
fw-skill20-net(config)# int g0/1
fw-skill20-net(config-if)# nameif dmz
INFO: Security level for "dmz" set to 0 by default.
fw-skill20-net(config-if)# secur
fw-skill20-net(config-if)# security-level 50
fw-skill20-net(config-if)# ip add 192.168.2.1 255.255.255.128
fw-skill20-net(config-if)# no shut
fw-skill20-net(config-if)# exit
fw-skill20-net(config)# int g0/2
fw-skill20-net(config-if)# nameif ins
fw-skill20-net(config-if)# nameif inside
INFO: Security level for "inside" set to 100 by default.
fw-skill20-net(config-if)# sec
fw-skill20-net(config-if)# security-level 100
fw-skill20-net(config-if)# ip add 192.168.1.1 255.255.255.0
fw-skill20-net(config-if)# no shut
fw-skill20-net(config-if)# exit
fw-skill20-net(config)# 
fw-skill20-net(config)# show ip
System IP Addresses:
Interface                Name                   IP address      Subnet mask     Method 
GigabitEthernet0/0       outside                200.220.55.1    255.255.255.240 manual
GigabitEthernet0/1       dmz                    192.168.2.1     255.255.255.128 manual
GigabitEthernet0/2       inside                 192.168.1.1     255.255.255.0   manual
Current IP Addresses:
Interface                Name                   IP address      Subnet mask     Method 
GigabitEthernet0/0       outside                200.220.55.1    255.255.255.240 manual
GigabitEthernet0/1       dmz                    192.168.2.1     255.255.255.128 manual
GigabitEthernet0/2       inside                 192.168.1.1     255.255.255.0   manual
fw-skill20-net(config)# show int ip br
Interface                  IP-Address      OK? Method Status                Protocol
GigabitEthernet0/0         200.220.55.1    YES manual up                    up  
GigabitEthernet0/1         192.168.2.1     YES manual up                    up  
GigabitEthernet0/2         192.168.1.1     YES manual up                    up  
GigabitEthernet0/3         unassigned      YES unset  administratively down up  
GigabitEthernet0/4         unassigned      YES unset  administratively down up  
GigabitEthernet0/5         unassigned      YES unset  administratively down up  
GigabitEthernet0/6         unassigned      YES unset  administratively down up  
Management0/0              unassigned      YES unset  administratively down up  
fw-skill20-net(config)# route outside 0.0.0.0 0.0.0.0 200.220.55.14
