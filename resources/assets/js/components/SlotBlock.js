import React, {Component} from 'react';
import { config } from '../config';
import axios from 'axios';

class SlotBlock extends Component {
    
    constructor () {
        super()
        this.state = {
            slot_info: '',
        }
    }
    
    async componentDidMount() {
        await axios.get(`${config.apiHost}${config.getData}`)
            .then(res => {
                this.setState({
                    slot_info: res.data,
                })
            })
    }
    
    render() {
      return (
      	<div className="slot-block">
            <p>{this.state.slot_info.slot_name}</p>
            <p>{this.state.slot_info.slot_element_id}</p>
            <p>{this.state.slot_info.slot_sizes}</p>
  		</div>
      )
    }
}
export default SlotBlock;