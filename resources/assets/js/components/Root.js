import React, {Component} from 'react';
import TextBlock from './TextBlock';
import AdvBlock from './AdvBlock';
import { config } from '../config';
import axios from 'axios';

class Root extends Component {

    constructor () {
        super()
        this.state = {
          button_title: "Show ADV",
          title: "ADV",
          text: '',
        }
    }

    async componentDidMount() {
        await axios.get(`${config.apiHost}${config.getText}`)
            .then(res => {
                this.setState({
                    text: res.data,
                })
            })
    }

    render() {
      return (
      	<div className="container-adv">
            <TextBlock text={ this.state.text }/>
            <AdvBlock title={ this.state.title } button_title={ this.state.button_title }/> 
      	</div>
      )
    }
}
export default Root;