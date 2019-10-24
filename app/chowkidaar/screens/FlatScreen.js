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
import {SERVER_URL} from "./BuildingScreen";
export default class FlatScreen extends React.Component {
    constructor(props) {
        super(props);
        let buildingId = this.props.navigation.getParam("id");
        this.state = {
            flats: [],
            loading: false,
            buildingId: buildingId
        };
    }

    async componentWillMount() {
        this.setState({
            loading: true
        });
        let response = await fetch(SERVER_URL + "/api/flat/building/" + this.state.buildingId + "/all");
        console.log(JSON.stringify(response._bodyInit));

        if(response.status === 200) {
            let responseJson = await response.json()
            console.log("Response json : " + JSON.stringify(responseJson));
            this.setState({
                houses:responseJson,
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
                    source={require('../assets/images/flat-illustration.png')}
                    resizeMode="contain"
                />
                <Text style={{fontFamily: "proxima-bold", fontSize: 18, color: Colors.dark_blue, marginLeft: responsiveWidth(5)}}>Flats</Text>
                <ScrollView style={{flex:1}}>
                    {this.getAllFlats()}
                    {this.getAllHouses()}
                </ScrollView>
            </View>
        );
    }

    getAllHouses(){
        if(!this.state.loading){
            return this.state.houses.map((item,index)=> <CardComponent text={item.name}number={item.name} key={index} status={item.status}/>)
        }
    }
    getAllFlats() {
        if(!this.state.loading) {
            return this.state.flats.map((item, index) => <CardComponent text={item.name} number={item.name} key={index} status={item.status}/>)
        }
    }
}

FlatScreen.navigationOptions = {
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
