import * as WebBrowser from 'expo-web-browser';
import React from 'react';
import {
    Image,
    Platform,
    ScrollView,
    StyleSheet,
    Text,
    TouchableOpacity,

    View,
} from 'react-native';
import HeaderComponent from '../components/HeaderComponent';
import {responsiveFontSize, responsiveHeight, responsiveWidth} from "react-native-responsive-dimensions";
import { Container, Header, Content, Input, Item ,Button} from 'native-base';
export default function LoginScreen() {
    return (
        <View style={styles.container}>
            <Image
                style={{width: responsiveWidth(50), height:responsiveHeight(40)}}
                source={require('../assets/images/chowkidaar-logo.png')}
                resizeMode="contain"
            />
            <Item regular  style={{marginBottom:responsiveHeight(2) }}>
                <Input placeholder='Username' />
            </Item>
            <Item regular  style={{marginBottom:responsiveHeight(2) }}>
                <Input placeholder='Password' />
            </Item>

            <Button block success>
                <Text>Login</Text>
            </Button>
        </View>
    );
}

LoginScreen.navigationOptions = {
    header: null,
};


const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#fff',
        flexDirection:'column',
        justifyContent:'center',
        alignItems:'center',
    },

});