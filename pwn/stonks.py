#used %x (about 15 times) to go up the stack
#put the token that's given into a hex --> ascii converter
#ended up with the value of the string variable
#then we can use the value of the string variable to get the flag by changing to order of the text 

string = "ocip{FTC0l_I4_t5m_ll0m_y_y3n58a025e3ÿÓ}"
for x in range(0,len(string), 4):
    #range is 0 to the length of the string, 4 at a time because the 'ocip' needs to become 'pico' which is 4 letters long
    print(string[x+3] + string[x+2] + string[x+1] + string[x], end = '')
    #because we're counting by 4, we need to add 3 to the index to get the next part, so on and so forth
    #end = '' is to prevent a new line from being printed after each iteration