import React from 'react';
import Colors from "../constants/Colors";
import {Image , View,StyleSheet} from 'react-native';
import {MaterialIcons} from "@expo/vector-icons";
import {responsiveWidth,responsiveHeight,responsiveFontSize} from "react-native-responsive-dimensions";
import { Container, Header, Content, Card, CardItem, Body, Text ,Right,Icon} from 'native-base';
export default class CardComponent extends React.Component{
    constructor(props){
        super(props);
    }
    render(){
        return(
            <View style={styles.buildingFlatContainer} elevation={10}>
                <Image
                    style={styles.imgFlat}
                    source={require('../assets/images/icons/Building-icon.png')}
                    resizeMode="contain"
                />
                <View style={styles.flatContainer}>
                    <Text style={styles.flatName}>{this.props.text}</Text>
                    <Text>{this.props.number}</Text>
                </View>
            </View>


        );
    }

}

const styles = StyleSheet.create({
    mainContainer:{
        flexDirection:'row',
        justifyContent:'space-between',
        paddingTop:responsiveHeight(2),

    },
    shadowContainer:{
        borderRadius: 4,
        borderWidth: 1,
        borderColor: '#d6d7da',
    },
    buildingFlatContainer:{
        display:'flex',
        flexDirection: 'row',
        paddingVertical: responsiveHeight(3),
        borderWidth: 0.5,
        borderColor: '#888',
        margin: responsiveHeight(2),
        borderRadius: 10,

    },
    flatContainer:{
        flexDirection:'column',
    },
    flatName:{
        fontWeight:'bold',
        fontFamily:'proxima',
    },
    imgFlat:{
        width: responsiveWidth(20),
        height:responsiveHeight(7),
        //     backgroundColor:Colors.green,
        //     borderRadius: responsiveWidth(20)+responsiveHeight(7)/2,
        //
    }



});