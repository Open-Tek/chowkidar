import * as WebBrowser from 'expo-web-browser';
import React from 'react';
import {
    Image,
    Platform,
    Alert,
    ScrollView,
    StyleSheet,
    Text,
    TouchableOpacity,

    View,
} from 'react-native';
import HeaderComponent from '../components/HeaderComponent';
import {responsiveFontSize, responsiveHeight, responsiveWidth} from "react-native-responsive-dimensions";
import { Container, Header, Content, Input, Item ,Button} from 'native-base';
import Colors from "../constants/Colors";
import {KeyboardAvoidingView} from "react-native-web";
import {KeyboardAwareScrollView} from "react-native-keyboard-aware-scrollview";
export default class LoginScreen extends React.Component{
    constructor(props) {
        super(props);
        this.state = {
            username: "",
            password: ""
        };
    }
    render() {

        return (
           <KeyboardAwareScrollView>
               <View style={styles.container}>
                   <Image
                       style={{width: responsiveWidth(60), height:responsiveHeight(40), marginBottom: responsiveHeight(5)}}
                       source={require('../assets/images/chowkidaar-logo.png')}
                       resizeMode="contain"
                   />
                   <Text style={{marginBottom:responsiveHeight(2), color: Colors.dark_blue, fontSize: 22,  alignSelf: "stretch", textAlign: "center", fontFamily: "proxima-bold"}}>Welcome, </Text>
                   <Item regular  style={{marginBottom:responsiveHeight(2) }}>
                       <Input placeholder='Username' onChangeText={(text) => this.setState({username: text})} value={this.state.username}/>
                   </Item>
                   <Item regular  style={{marginBottom:responsiveHeight(2) }}>
                       <Input placeholder='Password' secureTextEntry={true} onChangeText={(text) => this.setState({password: text})} value={this.state.password}/>
                   </Item>

                   <Button block style={{backgroundColor: Colors.green, color: '#fff', borderRadius: 5,
                       width: '100%', textAlign: "center"}} onPress={() => this.onLogin()}>
                       <Text style={{textAlign: "center", color: '#fff', fontSize: 18, fontWeight: "600", flex: 1}}>Login</Text>
                   </Button>
               </View>
           </KeyboardAwareScrollView>
        );
    }

    onLogin() {
        if(this.state.username === "") {
            Alert.alert(
                'Username is required',
                'Please provide a username',
                [
                    {text: 'OK', onPress: () => console.log('OK Pressed')},
                ],
                {cancelable: false},
            );
            return;
        }

        if(this.state.password === "") {
            Alert.alert(
                'Password is required',
                'Please provide a password',
                [
                    {text: 'OK', onPress: () => console.log('OK Pressed')},
                ],
                {cancelable: false},
            );
            return;
        }

        this.props.navigation.navigate("tabNavigator");
    }
}

LoginScreen.navigationOptions = {
    header: null,
    tabBarVisible: false
};


const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#fff',
        flexDirection:'column',
        paddingHorizontal: responsiveWidth(5),
        justifyContent:'center',
        alignItems:'center',
    },

});