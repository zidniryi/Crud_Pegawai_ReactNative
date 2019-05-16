import React from 'react';
import { createAppContainer, createStackNavigator } from 'react-navigation';
import PegawaiMain from './src/pegawai/PegawaiMain';
import PegawaiRead from './src/pegawai/PegawaiRead';
import PegawaiEdit from './src/pegawai/PegawaiEdit';



const RootStack = createStackNavigator(
  {

    PegawaiEdit: {
      screen: PegawaiEdit,
      navigationOptions: {

      }
    },    
    PegawaiMain: {
      screen: PegawaiMain,
      navigationOptions: {

      }
    },

    PegawaiRead: {
      screen: PegawaiRead,
      navigationOptions: {

      }
    },
    
  },
  {
    initialRouteName: 'PegawaiMain', // ini root
  }
);

const AppContainer = createAppContainer(RootStack);
export default class App extends React.Component {

  render() {
    return <AppContainer />;
  }
}

