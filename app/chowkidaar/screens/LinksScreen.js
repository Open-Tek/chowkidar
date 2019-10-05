import React from 'react';
import { View, StyleSheet } from 'react-native';
import { ExpoLinksView } from '@expo/samples';
import HeaderComponent from "../components/HeaderComponent";
export default function LinksScreen() {
  return (
      <View>
        <HeaderComponent/>
      </View>
  );
}

LinksScreen.navigationOptions = {
  header: null,
};
