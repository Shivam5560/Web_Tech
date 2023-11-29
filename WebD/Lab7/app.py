import streamlit as st
temp = []
no = [0]
def user_input():
    a = st.number_input("Enter the no og data entries ")
    no[0] = a

def inpu():
    i = 0
    for x in range(int(no[0])):
        date = st.date_input("Date ",key=i)
        t = st.number_input('Temperature',key=i+1)
        temp.append(t)
        i+=2
print(temp)
page_names_to_funcs = {
    "No of Entries": user_input,
    "User Input": inpu,
}

demo_name = st.sidebar.selectbox("Choose a page", page_names_to_funcs.keys())
page_names_to_funcs[demo_name]()