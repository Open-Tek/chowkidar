import React from 'react';
import Colors from "../constants/Colors";
import {Image , View,StyleSheet, TouchableOpacity} from 'react-native';
import {MaterialIcons} from "@expo/vector-icons";
import {responsiveWidth,responsiveHeight,responsiveFontSize} from "react-native-responsive-dimensions";
import { Container, Header, Content, Card, CardItem, Body, Text ,Right,Icon} from 'native-base'
export default class FlatComponent extends React.Component{
    constructor(props){
        super(props);
    }
    render(){
        return(
            <TouchableOpacity style={styles.shadow} onPress={() => this.props.onPress()}>
                <View style={styles.buildingFlatContainer} >
                    { (this.props.status === 1) ?
                        <Image
                            style={styles.imgFlat}
                            source={require('../assets/images/icons/home-icon-red.png')}/>
                        : <Image
                            style={styles.imgFlat}
                            source={require('../assets/images/icons/home-icon.png')}/>}
                    <View style={styles.flatContainer}>
                        <Text style={styles.flatName}>{this.props.text}</Text>
                    </View>
                </View>
            </TouchableOpacity>
        );
    }
}

const styles = StyleSheet.create({
    mainContainer:{
        flexDirection:'row',
        justifyContent:'space-between',
        paddingTop:responsiveHeight(2),
        paddingHorizontal: responsiveWidth(5)
    },
    shadow: {
        // shadowColor: Colors.dark_blue,
        // shadowOffset: {
        //     width: 0,
        //     height: 2ddd
        // },
        // shadowRadius: 8,
        // shadowOpacity: 0.5,
        // elevation: 3
    },
    buildingFlatContainer:{
        display:'flex',
        flexDirection: 'row',
        paddingVertical: responsiveHeight(2),
        borderWidth: 0.5,
        borderColor: '#ddd',
        paddingHorizontal: responsiveWidth(5),
        margin: responsiveHeight(2),
        borderRadius: 10,

    },
    flatContainer:{
        flexDirection:'column',
        alignItems: "center",
        justifyContent: "center"
    },
    flatName:{
        fontFamily:'proxima-bold',
        fontSize: 22,
        color: Colors.dark_blue
    },
    imgFlat:{
        width: responsiveHeight(7),
        height:responsiveHeight(7),
        marginRight: responsiveWidth(3),
        //     backgroundColor:Colors.green,
        //     borderRadius: responsiveWidth(20)+responsiveHeight(7)/2,
        //
    }
});