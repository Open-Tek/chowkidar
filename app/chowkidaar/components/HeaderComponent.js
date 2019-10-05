import React from 'react';
import {Image , View,StyleSheet} from 'react-native';
import {MaterialIcons} from "@expo/vector-icons";
import {responsiveWidth,responsiveHeight,responsiveFontSize} from "react-native-responsive-dimensions";
import { Container, Header, Left, Body, Right, Button, Icon, Title } from 'native-base';
import Colors from "../constants/Colors";
export default class HeaderComponent extends React.Component{
    constructor(props){
        super(props);
    }
    render(){
        return(
            //<View elevation={10} style={styles.shadowContainer}>
            //<View style={styles.mainContainer}>
            //  <MaterialIcons name ={'reorder'} size={responsiveFontSize(5.5)} color={Colors.green}/>
            // <Image
            //   style={{width: responsiveWidth(50), height:responsiveHeight(7)}}
            // source={require('../assets/images/chowkidaar-logo-inline.png')}
            //resizeMode="contain"
            ///>
            //<MaterialIcons name ={'search'} size={responsiveFontSize(5.5)} color={Colors.green}/>
            //</View>
            //</View>
            <Header style={styles.mainContainer}>
                <Body>
                    <Image
                        style={{width: responsiveWidth(40), height:responsiveHeight(7)}}
                        source={require('../assets/images/chowkidaar-logo-inline.png')}
                        resizeMode="contain"
                    />
                </Body>
                <Right>
                    <Image
                        style={{width: responsiveWidth(10), height:responsiveHeight(4)}}
                        source={require('../assets/images/icons/Search-icon.png')}
                        resizeMode="contain"
                    />
                </Right>
            </Header>

        );
    }

}

const styles = StyleSheet.create({
    mainContainer:{
        flexDirection:'row',
        justifyContent:'space-between',
        paddingTop:responsiveHeight(4),
        backgroundColor:'#fff',
    },
    shadowContainer:{
        borderRadius: 4,
        borderWidth: 1,
        borderColor: '#000',
    }


});