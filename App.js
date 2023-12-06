
import React, { useState, useEffect } from 'react';
import HomeScreen from './components/HomeScreen';
import SingIn from './components/SingIn';
import SingUp from './components/SingUp';
import SideMenu from './components/SideMenu';

import DrawerNavigator from './components/DrawerNavigator';
import { NativeBaseProvider } from 'native-base';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import 'react-native-gesture-handler';
import * as Font from 'expo-font';


const Stack = createNativeStackNavigator();

export default function App() {

  const [fontLoaded, setFontLoaded] = useState(false);
  useEffect(() => {
    const loadFont = async () => {
      await Font.loadAsync({
        Caveat: require('./fonts/Caveat-Regular.ttf'),
        CaveatDark: require('./fonts/Caveat-Regular.ttf'),
      });

      setFontLoaded(true);
    };

    loadFont();
  }, []);

  if (!fontLoaded) {
    return null;
  }

  return (
    <NativeBaseProvider><NavigationContainer>
       <Stack.Navigator initialRouteName='Home'>
      <Stack.Screen name="SideMenu" component={SideMenu} options={{}}/>
      <Stack.Screen name="Home" component={HomeScreen} options={{headerShown:false}}/>
      <Stack.Screen name="SingIn" component={SingIn} options={{headerShown:false}}/>
      <Stack.Screen name="SingUp" component={SingUp} options={{headerShown:false}}/>
      <Stack.Screen name="Drag" component={DrawerNavigator} options={{headerShown:false}} />
    </Stack.Navigator>
  </NavigationContainer>
  </NativeBaseProvider>
  );
}

