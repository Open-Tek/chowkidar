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
                <View style={styles.container}>
                    <ScrollView
                        style={styles.container}
                        contentContainerStyle={styles.contentContainer}>
                        <View style={styles.welcomeContainer}>
                            <Image
                                source={
                                    __DEV__
                                        ? require('../assets/images/robot-dev.png')
                                        : require('../assets/images/robot-prod.png')
                                }
                                style={styles.welcomeImage}
                            />
                        </View>

                        <View style={styles.getStartedContainer}>
                            <DevelopmentModeNotice />

                            <Text style={styles.getStartedText}>Get started by opening</Text>

                            <View
                                style={[styles.codeHighlightContainer, styles.homeScreenFilename]}>
                                <MonoText>screens/HomeScreen.js</MonoText>
                            </View>

                            <Text style={styles.getStartedText}>
                                Change this text and your app will automatically reload.
                            </Text>
                        </View>

                        <View style={styles.helpContainer}>
                            <TouchableOpacity onPress={handleHelpPress} style={styles.helpLink}>
                                <Text style={styles.helpLinkText}>
                                    Help, it didn’t automatically reload!
                                </Text>
                            </TouchableOpacity>
                        </View>
                    </ScrollView>

                    <View style={styles.tabBarInfoContainer}>
                        <Text style={styles.tabBarInfoText}>
                            This is a tab bar. You can edit it in:
                        </Text>

                        <View
                            style={[styles.codeHighlightContainer, styles.navigationFilename]}>
                            <MonoText style={styles.codeHighlightText}>
                                navigation/MainTabNavigator.js
                            </MonoText>
                        </View>
                    </View>
                </View>
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
