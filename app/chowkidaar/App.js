import * as Font from 'expo-font';
import React, { useState } from 'react';
import { Platform, StatusBar, StyleSheet, View ,Text} from 'react-native';

import AppNavigator from './navigation/AppNavigator';

export default class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      fontLoaded:false,
    };
  }

  async componentWillMount() {

    await Font.loadAsync({
      'proxima': require("./assets/fonts/ProximaNova-Regular.otf"),

    });
    this.setState({
      fontLoaded:true,
    });
  }
  render(){

    console.log("Render Called");
    if (this.state.fontLoaded) {

      return (
          <View style={styles.container}>
            {Platform.OS === 'ios' && <StatusBar barStyle="light-content"/>}
            <AppNavigator/>
          </View>
      );
    }
    return null;
  }
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
  },
});
