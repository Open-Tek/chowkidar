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
import CardComponent from "../components/CardComponent";
import {responsiveHeight, responsiveWidth} from "react-native-responsive-dimensions";
import Colors from "../constants/Colors";

export const SERVER_URL = "http://192.168.43.120:8000";

export default class BuildingScreen extends React.Component{

    constructor(props) {
        super(props);
        this.state = {
            buildings: [],
            loading: false
        }
    }

    async componentWillMount() {
        this.setState({
            loading: true
        });
        let response = await fetch(SERVER_URL + "/api/building/all");
        console.log(JSON.stringify(response._bodyInit));

        if(response.status === 200) {
            let responseJson = await response.json()
            console.log("Response json : " + JSON.stringify(responseJson));
            this.setState({
                buildings: responseJson,
                loading: false
            });
        }
    }


    render() {
        return (

            <View style={styles.container}>
                {/*<HeaderComponent/>*/}
                <HeaderComponent/>
                <Image
                    style={styles.imgFlat}
                    source={require('../assets/images/building-illustration.png')}
                    resizeMode="contain"
                />
                <Text style={{fontFamily: "proxima-bold", fontSize: 18, color: Colors.dark_blue, marginLeft: responsiveWidth(5)}}>Buildings</Text>
                <ScrollView style={{flex:1}}>
                    {this.getAllBuildings()}
                </ScrollView>
            </View>
        );
    }

    getAllBuildings() {
        if(!this.state.loading) {
            return this.state.buildings.map((item, index) => <CardComponent text={item.name} number={item.name} key={index + ""} onPress={() => this.props.navigation.navigate("Flats", {
                id: item.id
            })}/>)
        }
    }
}

BuildingScreen.navigationOptions = {
    header: null,
};


const styles = StyleSheet.create({
    container: {
        flex:1,
        backgroundColor: '#fff',
        flexDirection:'column',

    },
    imgFlat:{
        flex:1,
        alignSelf: "center",
        width:responsiveWidth(80),
        justifyContent:"center",
    },

});
